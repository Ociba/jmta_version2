<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    protected function getForum(){
        return view('Admin.forum');
    }
}
