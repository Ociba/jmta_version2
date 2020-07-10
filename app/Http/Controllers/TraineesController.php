<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraineesController extends Controller
{
    protected function getAllTrainees(){
        return view('Admin.all_trainees');
    }

    protected function getNewTrainees(){
        return view('Admin.new_trainees');
    }

    protected function getOldTrainees(){
        return view('Admin.old_trainees');
    }
}
