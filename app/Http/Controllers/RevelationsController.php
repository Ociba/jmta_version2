<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revelations;

class RevelationsController extends Controller
{
    //creating an instance of the authenticated user
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }
     /**
      * This function returns page for marathon details
      */ 
      protected function readMarathonPreview(){
        if($this->totalRevelationSubmitted(auth()->user()->id) == 40){
            return redirect('/get-courses');
         }else{
             return view('Admin.marathon');
            } 
       }
      /*
      * This function is for validating users to see assessment form if they have  submitted 40 times revelations
      */
     private function totalRevelationSubmitted($trainee_id){
         $count_times_revelations_submitted =Revelations::join('users','revelations.trainee_id','users.id')
         ->where('revelations.trainee_id',$trainee_id)->count();
         return $count_times_revelations_submitted;
     }
    /**
     * This function is for individual evaluation details
     */
    protected function getMyRevelations($trainee_id){
        $my_revelations = Revelations::join('users','revelations.trainee_id','users.id')
        ->where('revelations.trainee_id',auth()->user()->id)
        ->select('users.name','users.email','users.created_at','revelations.id')->get();
        return view('Admin.my_revelations',compact('my_revelations'));
    }

    protected function getRevelationsForm(){
        return view('Admin.revelations_form');
    }

    /**
     * This function creates a revelation by the candidate
     */
    private function createRevelation(){
        $revelation = new Revelations;
        $revelation->trainee_id       = $this->authenticated_user->getAuthenticatedUser();
        $revelation->revelation_one   = request()->revelation_one;
        $revelation->revelation_two   = request()->revelation_two;
        $revelation->revelation_three = request()->revelation_three;
        $revelation->revelation_four  = request()->revelation_four;
        $revelation->revelation_five  = request()->revelation_five;
        $revelation->revelation_six   = request()->revelation_six;
        $revelation->revelation_seven = request()->revelation_seven;
        $revelation->day_number       = request()->day_number;
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
    protected function getIndividualRevelations($trainee_id){
        $individual_revelations = Revelations::join('users','revelations.trainee_id','users.id')
        ->where('revelations.trainee_id',$trainee_id)
        ->select('revelations.*','revelations.id')
        ->get();
        return view('Admin.individual-revelations',compact('individual_revelations'));
    }

    /**
     * This function gets all the revelations that were posted by all trainees
     */
    protected function getAllRevelations(){
        $all_revelations = Revelations::join('users','revelations.trainee_id','users.id')
        ->where('users.status','active')
        ->select('users.name','users.email','users.created_at','users.id')->get();
        return view('Admin.all_revelations',compact('all_revelations'));
    }
    /**
     * This function deletes the revelation, only the Admin does this
     */
    protected function deleteRevelation($revelation_id){
        Revelations::find($revelation_id)->delete();
        return redirect()->back()->with('msg','A revelation has been deleted successfully');
    }

    /**
     * This function gets revelations of the checked day
     */
    protected function getAllRevelationsForClickedDay($date){
        $this_day = Revelations::whereDate('created_at',$date)->get();
        return view('Admin.revelations_for_a_day',compact('this_day'));
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
        }elseif(empty(request()->day_number)){
            return redirect()->back()->withErrors('Please enter the number of days to continue');
        }elseif(Revelations::where('day_number', request()->day_number)->where('revelations.trainee_id',auth()->user()->id)->exists())
        {
            return Redirect()->back()->withErrors('Please you already submitted for this day');
        }else{
            return $this->createRevelation();
        }
    }
}
