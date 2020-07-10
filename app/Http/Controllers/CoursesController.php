<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    protected function getCourses(){
        return view('Admin.courses');
    }
    protected function getSubCourses(){
        return view('Admin.sub_courses');
    }
}
