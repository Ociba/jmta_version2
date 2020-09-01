<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revelations;
use App\Enrollment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function index()
    {
        if($this->totalRevelationSubmitted(auth()->user()->id) == 40){
            return redirect('/get-courses');
        }elseif(in_array('Can view dashboard', auth()->user()->getUserPermisions())){
        return view('template');
        }else{
            return redirect('/create-new-revelation');
        }

    }
    /**
     * This function is for validating users to see revelation form if they have  submitted 40 times revelations
     */
     private function totalRevelationSubmitted($trainee_id){
        $trainee_id = auth()->user()->id;
        $count_times_revelations_submitted =Revelations::join('users','revelations.trainee_id','users.id')
        ->where('revelations.trainee_id',$trainee_id)->count();
        return $count_times_revelations_submitted;
    }
    /**
    *This function checks for those trainees who are already enrolled
     */
     private function enrolledTrainees($trainee_id){
         $enrolled_trainees =Enrollment::join('courses','enrollments.course_id','courses.id')
         ->join('users','enrollments.trainee_id','users.id')
         ->where('enrollments.trainee_id',$trainee_id)
         ->where('enrollments.attendance_status','active')
         ->where('enrollments.payment_status','successful');
         return $enrolled_trainees;
     }
}
