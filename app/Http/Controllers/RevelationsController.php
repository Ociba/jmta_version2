<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revelations;

class RevelationsController extends Controller
{
    /**
     * This function creates a revelation by the candidate
     */
    private function createRevelation(){
        $revelation = new Revelations;
        $revelation->trainee_id    = request()->trainee_id;
        $revelation->revelation_one   = request()->revelation_one;
        $revelation->revelation_two   = request()->revelation_two;
        $revelation->revelation_three = request()->revelation_three;
        $revelation->revelation_four  = request()->revelation_four;
        $revelation->revelation_five  = request()->revelation_five;
        $revelation->revelation_six   = request()->revelation_six;
        $revelation->revelation_seven = request()->revelation_seven;
        $revelation->save();
        return redirect()->back()->with('msg','Thank you for posting todays revelation, looking forward to hearing from you tomorrow');
    }
    /**
     * This function sends a message every after 10 days to the bible marathon 
     * trainees to congulatulate them
     */
    private function congulatulateTrainees(){
        return redirect('/')->with('msg','Wow, Congratulations. You have reached the tenth day of your bible marathon');
    }

    /**
     * This function gets the revelations that have been posted my me as a user
     */
    protected function getMyRevelations($trainee_id){
        $my_revelations = Revelations::find($trainee_id)->get();
        //return $my_revelations;
    }

    /**
     * This function gets all the revelations that were posted by all trainees
     */
    protected function getAllRevelations(){
        $all_revelations = Revelations::get();
    }
    /**
     * This function deletes the revelation, only the Admin does this
     */
    protected function deleteRevelation($revelation_id){
        Revelations::find($revelation_id)->delete();
        return redirect()->back()->with('msg','A revelation has been deleted successfully');
    }
    /**
     * This function validates the Revelations
     */
    protected function validateRevelation(){
        if(empty(request()->revelation_one)){
            return redirect()->back()->withErrors('Please Enter the first revelation to continue');
        }elseif(empty(request()->revelation_two)){
            return redirect()->back()->withErrors('Please Enter the second revelation to continue');
        }elseif(empty(request()->revelation_three)){
            return redirect()->back()->withErrors('Please Enter the Third revelation to continue');
        }elseif(empty(request()->revelation_four)){
            return redirect()->back()->withErrors('Please Enter the Fourth revelation to continue');
        }elseif(empty(request()->revelation_five)){
            return redirect()->back()->withErrors('please Enter the fifth revelation to continue');
        }elseif(empty(request()->revelation_six)){
            return redirect()->back()->withErrors('please Enter the sixth revelation to continue');
        }elseif(empty(request()->revelation_seven)){
            return redirect()->back()->withErrors('please Enter the seventh revelation to continue');
        }else{
            return $this->createRevelation();
        }
    }
}
