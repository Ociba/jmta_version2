<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    //creating an instance of the authenticated user
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }

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

    /**
     * Any user with a role of creating a course can create it
     */
    private function createCourse(){
        $course = new Course;
        $course->course_name = request()->course_name;
        $course->course_description = request()->course_description;
        $course->created_by = $this->authenticated_user->getAuthenticatedUser();
        $course->save();
        return redirect()->back()->with('msg','A new course has been created');
    }

    /**
     * Validate the course before it is created
     */
    protected function validateCourse(){
        if(empty(request()->course_name)){
            return redirect()->back()->withErrors("Course name is needed, Please enter it to continue");
        }elseif(empty(request()->course_description)){
            return redirect()->back()->withErrors('Course Description is required to continue');
        }else{
            return $this->createCourse();
        }
    }

    /**
     * A user with a permission to edit a course can edit it
     */
    protected function editCourse($id){
        $course_to_edit = Course::find($id)->update(array(
            'course_name'        => request()->course_name,
            'course_description' => request()->course_description,
            'updated_by'         =>  $this->authenticated_user->getAuthenticatedUser()   
        ));
        return redirect()->back()->with('msg','A Course Update was made successfully');
    }

    /**
     * A user with a permission to delete a course can delete it
     */
    protected function deleteCourse($id){
        $course_to_delete = Course::find($id)->delete();
        return redirect()->back()->with('msg','A course has been deleted');
    }

    /**
     * this function finds the deleted courses
     */
    protected function getTrashedCourses(){
        $deleted_courses = Course::withTrashed()->get();
        return $deleted_courses;
    }

    /**
     * This functiton restores a deleted Course
     */
    protected function restoreCourse($id){
        $course_to_restore = Course::find($id)->restore();
        return redirect()->back()->with('msg','The course has been restored successfully');
    }
}
