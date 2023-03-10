<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index_journal(){
        return view('pages.journals.journals');
    }
}
