<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;

class TraineesController extends Controller
{
    protected function getAllTrainees(){
        $all_trainees           = $this->showAllTrainees();
        $number_of_new_trainees = $this->countNewTrainees();
        $number_of_old_trainees = $this->countOldTrainees();
        return view('Admin.all_trainees',compact('all_trainees','number_of_old_trainees','number_of_new_trainees'));
    }

    protected function getNewTrainees(){
        $new_trainees = $this->showNewTrainees();
        return view('Admin.new_trainees',compact('new_trainees'));
    }

    protected function getOldTrainees(){
        $old_trainees = $this->showOldTrainees();
        return view('Admin.old_trainees',compact('old_trainees'));
    }

    /**
     * This function will get the old trainees, meaning trainees of not this month
     */
    private function showOldTrainees(){
        $old_trainees = Enrollment::whereMonth('created_at','!=',date('M'))->get();
        return $old_trainees;
    }

    /**
     * This function will get the new trainees, meaning the trainees of this month
     */
    private function showNewTrainees(){
        $new_trainees = Enrollment::whereMonth('created_at',date('M'))->get();
        return $new_trainees;
    }

    /**
     * This function gets all the trainees
     */
    private function showAllTrainees(){
        $all_trainees = Enrollment::join('courses','enrollments.course_id','courses.id')
        ->select('enrollments.*','courses.course_name')
        ->get();
        return $all_trainees;
    }

    /**
     * This function counts the new trainees
     */
    private function countNewTrainees(){
        $count_of_new_trainees = Enrollment::whereMonth('created_at',date('M'))->count();
        return $count_of_new_trainees;
    }
    /**
     * This function counts the old trainees
     */
    private function countOldTrainees(){
        $count_of_old_trainees = Enrollment::whereMonth('created_at','!=',date('M'))->count();
        return $count_of_old_trainees;
    }

    /**
     * This function suspends a trainee
     */
    protected function suspendTrainee($trainee_id){
        Enrollment::where('id',$trainee_id)->update(array(
            'attendance_status' => 'suspended'
        ));
        return redirect()->back()->withErrors('Trainee has been suspended successfully');
    }

    /**
     * This function activates a suspended trainee
     */
    protected function activateTrainee($trainee_id){
        Enrollment::where('id',$trainee_id)->update(array(
            'payment_status' => 'successful'
        ));
        return redirect()->back()->withErrors('Trainee has been Activated successfully');
    }

    /**
     * This function calls the soft deletes when deleting a trainee
     */
    protected function deleteTrainee($trainee_id){
        Enrollment::where('id',$trainee_id)->delete();
        return redirect()->back()->withErrors("Trainee deletion was successfull");
    }

    /**
     * This function shows a delete trainee
     */
    protected function showDeletedTrainees(){
        $deleted_trainees = Enrollment::where('deleted_at','!=','null')->withTrashed()->get();
        return $deleted_trainees;
    }
}
