<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
    protected function getEnrollmentForm(){
        return view('Admin.enrollment_form');
    }
}
