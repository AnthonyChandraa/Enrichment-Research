<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\UserLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index_manage_user(){
        $users = User::query()->orderBy('created_at', 'desc')->paginate(6);
        return view('pages.manage-user.manage-user', compact('users'));
    }

    public function resend_email(Request $request){
        $validator = Validator::make($request->all(), [
           'id' => 'required'
        ]);

        if($validator->fails()){
            notify()->error('Bad Request');
            return redirect()->back();
        }

        $id = $request->input('id');
        $user = User::query()->where('id', '=', $id)->first();
        $url = '';
        $oldurl = UserLink::query()->where('user_id', '=', $id)->first();
        if($oldurl==null){
            $newurl = Str::random(20);
            UserLink::query()->insert([
                'user_id' => $id,
                'url' => $newurl,
                'expires_at' => now()->addHours(24)
            ]);
            $url = $newurl;
        }else{
            $url = $oldurl->url;
        }
        $url = env('APP_URL'). "/auth/verify-email/" .$url;
        Mail::to($user->email)->send(new VerifyEmail("$user->email", "$url"));
        notify()->success('Email Has Been Sent Successfully!');
        return redirect()->back();
    }

    public function bypass_email(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if($validator->fails()){
            notify()->error('Bad Request');
            return redirect()->back();
        }

        $user = User::find($request->input('id'));
        if($user->email_verified_at == null){
            User::query()->where('id', '=', $request->input('id'))->update([
               'email_verified_at' => now(),
               'updated_at' => now()
            ]);
            notify()->success('Email Has Been Verified!');
            return redirect()->back();
        }else{
            notify()->info('Email Has Been Verified!');
            return redirect()->back();
        }
    }

    public function delete_user(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if($validator->fails()){
            notify()->error('Bad Request');
            return redirect()->back();
        }

        User::query()->where('id', '=', $request->input('id'))->delete();
        notify()->success('User Has Been Deleted!');
        return redirect()->back();
    }

    public function search_user(Request $request){
        if($request->input('search') == null){
            return redirect()->route('index_manage_user');
        }

        $users = User::query()
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->where('users.email', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('user_details.first_name', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('user_details.last_name', 'LIKE', '%'.$request->input('search').'%')
            ->paginate(6)->withQueryString();

            return view('pages.manage-user.manage-user', compact('users'));
    }
}
