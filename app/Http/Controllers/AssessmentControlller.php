<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentControlller extends Controller
{
    //
    protected function getAssessmentForm(){
        return view('Admin.assessment_form');
    }
}
