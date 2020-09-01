<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Subcourse;
use App\SubcourseLecture;
use App\Courseunit;
use App\Enrollment;

class CoursesController extends Controller
{
    //creating an instance of the authenticated user
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }

    protected function getCourses(){
        $enrolled_for_id = [];
        $not_enrolled_for = [];
        $courses_ive_not_enrolled_for = [];
        $courses = Enrollment::where('trainee_id',auth()->user()->id)
        ->join('courses','courses.id','enrollments.course_id')
        ->get();
        foreach($courses as $enrolled_for){
            array_push($enrolled_for_id, $enrolled_for->course_id);
        }
        $all_coursers = Course::all();
        foreach($all_coursers as $courses){
            if(in_array($courses->id, $enrolled_for_id)){
                continue;
            }else{
                array_push($not_enrolled_for, $courses->id);
            }
        }
        for($i=0; $i<count($not_enrolled_for); $i++){
            array_push($courses_ive_not_enrolled_for, Course::where('id',$not_enrolled_for[$i])->get());
        }
        // return collect($courses_ive_not_enrolled_for);
        $courses = collect($courses_ive_not_enrolled_for);
        return view('Admin.courses', compact('courses'));
    }
   
    protected function getCourseUnits(){
        $get_course_units =Courseunit::join('courses','courseunits.course_id','courses.id')
        ->join('users','courseunits.trainee_id','users.id')
        ->orderBy('courseunits.created_at','desc')
        ->limit(1)->get();
        return view('Admin.sub_courses', compact('get_course_units'));
    }
    protected function getAlreadEnrolledCourses($trainee_id){
        $get_course_already_enrolled =Enrollment::join('courses','enrollments.course_id','courses.id')
        ->join('users','enrollments.trainee_id','users.id')
        ->where('enrollments.trainee_id',auth()->user()->id)
        ->select('enrollments.*','users.name','courses.course_name')
        ->get();
        return view('Admin.enrolled_courses', compact('get_course_already_enrolled'));
    }
    protected function getLecture($id){
        if(SubcourseLecture::where('courseunit_id',$id)->where('status','!=','active')->exists()){
            return redirect()->back()->withErrors('Please complete the previous course to continue');
        }elseif(SubcourseLecture::where('courseunit_id', $id)->exists()){
            $lectures = SubcourseLecture::where('courseunit_id',$id)->get();
            return view('Admin.lecture_units',compact('lectures'));
        }else{
            return redirect()->back()->withErrors('The is no content uploaded for this course unit');
        }
    }

    protected function viewCourse($id){
        if(Courseunit::where('id', $id)->where('status','!=','active')->exists()){
            return redirect()->back()->withErrors('Please complete the previous course to continue');
        }elseif(Courseunit::where('id', $id)->exists()){
            $course_unit =Courseunit::where('id',$id)->get();
            $other_course_unit =Courseunit::where('id','!=',$id)->get();
            $all_Course_units = Courseunit::join('subcourse_lectures','subcourse_lectures.courseunit_id','courseunits.id')
            ->select('courseunits.course_unit','subcourse_lectures.*')
            ->get();
        return view('Admin.courses_layout', compact('course_unit','all_Course_units','other_course_unit'));
        }else{
            return redirect()->back()->withErrors("The selected Lecture has no content uploaded");
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
        $save_course_video = request()->video;
        $video_original_name = $save_course_video->getClientOriginalName();
        $save_course_video->move('course-video/',$video_original_name);

        $course = new Courseunit;
        //$course->subcourse_lecture_id  = request()->lecture;
        $course->description = request()->description;
        $course->course_unit =request()->course_unit;
        $course->course_id      = request()->course_name;
        $course->video = $video_original_name;
        $course->save();
        return redirect()->back()->with('msg','A new course unit has been created');
    }
    /** validate course units */
    protected function validateCourseUnits(){
        if(empty(request()->description)){
            return redirect()->back()->withErrors('Course Description is required to continue');
        }elseif(empty(request()->course_unit)){
                return redirect()->back()->withErrors('Course Unit is required to continue');
        }elseif(empty(request()->video)){
            return redirect()->back()->withErrors("Please attach your course video to continue");
        }else{
            return $this->createCourseUnit();
        }
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
