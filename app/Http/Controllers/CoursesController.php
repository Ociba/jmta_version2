<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Subcourse;
use App\SubcourseLecture;
use App\Courseunit;

class CoursesController extends Controller
{
    //creating an instance of the authenticated user
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }

    protected function getCourses(){
        $courses = Course::get();
        return view('Admin.courses', compact('courses'));
    }
    protected function getSubCourses(){
        $sub_courses = Subcourse::join('courses','subcourses.course_id','courses.id')
        ->select('courses.course_name', 'subcourses.*')->get();
        return view('Admin.sub_courses', compact('sub_courses'));
    }
    protected function getLecture($id){
        if(SubcourseLecture::where('subcourse_id',$id)->where('status','!=','active')->exists()){
            return redirect()->back()->withErrors('Please complete the previous course to continue');
        }else{
            $lectures = SubcourseLecture::where('subcourse_id',$id)->get();
            return view('Admin.lecture_units',compact('lectures'));
        }
    }

    protected function viewCourse($id){
        if(Courseunit::where('subcourse_lecture_id', $id)->where('status','!=','active')->exists()){
            return redirect()->back()->withErrors('Please complete the previous course to continue');
        }else{
            $course_unit =Courseunit::join('subcourse_lectures','courseunits.subcourse_lecture_id','subcourse_lectures.id')
            ->join('courses','courseunits.course_id','courses.id')->where('subcourse_lecture_id',$id)
            ->select('courseunits.course_unit','courseunits.description','subcourse_lectures.lecture','courses.video','courses.course_name','courseunits.id')->get();
        return view('Admin.courses_layout', compact('course_unit'));
        }
    }
    protected function addCourseForm(){
        return view('Admin.add_course');
    }
    protected function addCourseUnit(){
        $course = Course::get();
        $sub_course_lectures = SubcourseLecture::get();
        return view('Admin.add_course_unit',compact('course','sub_course_lectures')); 
    }
    /**create course units */
    private function createCourseUnit(){
        $course = new Courseunit;
        $course->subcourse_lecture_id  = request()->lecture;
        $course->description = request()->description;
        $course->course_unit =request()->course_unit;
        $course->course_id      = request()->course_name;
        $course->save();
        return redirect()->back()->with('msg','A new course unit has been created');
    }
    /** validate course units */
    protected function validateCourseUnits(){
        if(empty(request()->description)){
            return redirect()->back()->withErrors('Course Description is required to continue');
        }elseif(empty(request()->course_unit)){
                return redirect()->back()->withErrors('Course Unit is required to continue');
        }else{
            return $this->createCourseUnit();
        }
    }

    /**
     * Any user with a role of creating a course can create it
     */
    private function createCourse(){
        $save_course_video = request()->video;
        $video_original_name = $save_course_video->getClientOriginalName();
        $save_course_video->move('course-video/',$video_original_name);

        $course = new Course;
        $course->course_name = request()->course_name;
        $course->course_description = request()->course_description;
        $course->video = $video_original_name;
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
        }elseif(empty(request()->video)){
            return redirect()->back()->withErrors("Please attach your course video to continue");
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
