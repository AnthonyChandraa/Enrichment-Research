<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index_e_learning(){
        return view('pages.e-learning.e-learning');
    }
}
