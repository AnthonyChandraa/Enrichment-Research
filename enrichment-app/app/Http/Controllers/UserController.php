<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserLink;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index_login(){
        return view('pages.auth.login');
    }

    public function index_register(){
        return view('pages.auth.register');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
           'email' => 'required|email',
           'password' => 'required|min:8|max:20|alpha_num'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'login')->withInput();
        }


        if(!Auth::attempt($validator->validated(), $request->input('remember_me'))){
            notify()->error('Invalid Account');
            return redirect()->back();
        }

        if(Auth::user()->email_verified_at == null){
            notify()->error('Email is Not Verified! Please check your inbox for verification email!');
            Auth::logout();
            return redirect()->back();
        }

        notify()->success('Login Successful :)');
        return redirect()->route('index_home');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:users',
           'password' => 'required|min:8|max:20|alpha_num',
           'confirm' => 'required|same:password',
            'terms' => 'required',
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30'
        ],[
            'confirm.same' => 'The Confirm Password and Password field must match'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'register')->withInput();
        }

        $newUUID = Str::uuid();

        $user = new User();
        $user->id = $newUUID;
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->created_at = now();
        $user->save();

        $userDetail = new UserDetail();
        $userDetail->user_id = $newUUID;
        $userDetail->first_name = $request->input('first_name');
        $userDetail->last_name = $request->input('last_name');
        $userDetail->created_at = now();

        $randomStr = Str::random(20);
        $url = env('APP_URL'). "/auth/verify-email/" . $randomStr;
        $expire = now()->addHours(24);

        $userLink = new UserLink();
        $userLink->user_id = $newUUID;
        $userLink->url = $randomStr;
        $userLink->expires_at = $expire;
        $userLink->created_at = now();
        $userLink->save();

        Mail::to($request->input('email'))->send(new VerifyEmail("$user->email", "$url"));

        notify()->success('User Registered Successfully :)');
        return redirect()->route('index_login');
    }

    public function index_forgot_password(){
        return view('pages.auth.forgot-password');
    }

    public function forgot_password(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'forgot_password')->withInput();
        }

        $search = User::query()->where('email', '=', $request->input('email'))->first();
        if($search!=null){
            $destination = $request->input('email');
            $expire = now()->addHours(24);
            $randomStr = Str::random(20);

            $url = env('APP_URL')."/auth/reset-password/".$randomStr;

            $userLink = new UserLink();
            $userLink->user_id = $search->id;
            $userLink->url = $randomStr;
            $userLink->expires_at = $expire;
            $userLink->created_at = now();
            $userLink->save();

            Mail::to($request->input('email'))->send(new ForgotPassword("$destination", "$url"));
        }

        notify()->success('Your reset password email has been sent. Please check your mailbox!');
        return redirect()->route('index_login');
    }

    public function index_reset_password($id){
        $search = UserLink::query()->where('url', '=', $id)->first();
        if($search==NULL || now() >= $search->expires_at){
            return abort(404);
        }

        return view('pages.auth.reset-password', compact('id'));
    }

    public function reset_password(Request $request){
        $validator = Validator::make($request->all(), [
           'password' => 'required|min:8|max:20',
           'confirm' => 'same:password',
            'id' => 'required'
        ],[
            'confirm.same' => 'The New Password and Confirm Password field must match',
            'required.id' => 'Bad Request'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'reset_password')->withInput();
        }
        $search = UserLink::query()->where('url', '=', $request->input('id'))->first();

        if($search==null){
            notify()->error('Bad Request');
            return redirect()->back();
        }

        User::query()->where('id', '=', $search->user_id)->update([
           'password' => Hash::make($request->input('password')),
            'updated_at' => now()
        ]);

        $search->delete();

        notify()->success('Password Updated Successfully!');
        return redirect()->route('index_login');
    }

    public function index_verify_email($id){
        $search = UserLink::query()->where('url', '=', $id)->first();
        if($search==NULL || now() >= $search->expires_at){
            return abort(404);
        }
        return view('pages.auth.verify-email', compact('id'));
    }

    public function verify_email(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        $search = UserLink::query()->where('url', '=', $request->input('id'))->first();

        if($search==null){
            notify()->error('Bad Request');
            return redirect()->back();
        }

        User::query()->where('id', '=', $search->user_id)->update([
            'email_verified_at' => now(),
            'updated_at' => now()
        ]);

        $search->delete();

        notify()->success('Your Email is Verified!');
        return redirect()->route('index_login');
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect()->route('index_login');
    }
}
