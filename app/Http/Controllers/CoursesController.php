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
    protected function getLecture($id){
        if($id>1){
            return redirect()->back()->withErrors('Please complete Kingdom Dynamics 101 to continue');
        }
        return view('Admin.lecture_units');
    }

    protected function viewCourse($id){
        if($id>1){
            return redirect()->back()->withErrors('Please complete Self Discovery one to continue');
        }
        return view('Admin.courses_layout');
    }
}
