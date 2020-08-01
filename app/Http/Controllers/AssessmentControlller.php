<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assessment;

class AssessmentControlller extends Controller
{
    //creating an instance of the authenticated user
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }
    //This function returns the assessment form
    protected function getAssessmentForm(){
        return view('Admin.assessment_form');
    }

    /**
     * This function submits the assessment
     */
    private function submitAssessment(){

        $video_item = request()->video_recording;
        $video_recording_original_name = $video_item->getClientOriginalName();
        $video_item->move('marathon-videos/',$video_recording_original_name);

        $assessment = new Assessment;
        $assessment->question_one       = request()->question_one;
        $assessment->question_two       = request()->question_two;
        $assessment->question_if        =request()->question_if;
        $assessment->question_three     = request()->question_three;
        $assessment->question_four      = request()->question_four;
        $assessment->question_five      = request()->question_five;
        $assessment->question_six       = request()->question_six;
        $assessment->question_seven_one = request()->question_seven_one;
        $assessment->question_seven_two = request()->question_seven_two;
        $assessment->question_seven_three = request()->question_seven_three;
        $assessment->question_seven_four= request()->question_seven_four;
        $assessment->question_eight     = request()->question_eight;
        $assessment->question_nine      = request()->question_nine;
        $assessment->question_ten       = request()->question_ten;
        $assessment->question_eleven    = request()->question_eleven;
        $assessment->question_twelve    = request()->question_twelve;
        $assessment->question_thirteen  = request()->question_thirteen;
        $assessment->question_fourteen  = request()->question_fourteen;
        $assessment->question_fifteen   = request()->question_fifteen;
        $assessment->question_sixteen   = request()->question_sixteen;
        $assessment->question_seventeen = request()->question_seventeen;
        $assessment->question_eighteen  = request()->question_eighteen;
        $assessment->question_nineteen  = request()->question_nineteen;
        $assessment->question_twenty    = request()->question_twenty;
        $assessment->video_recording    = $video_recording_original_name;
        $assessment->trainee_id         = $this->authenticated_user->getAuthenticatedUser();
        $assessment->save();
        return redirect('/get-courses')->with('msg','Your assessment has been recieved. we are glad you have decided to come for the accademy');
    }

    /**
     * This function validates the assessment
     */
    protected function validateAssessment(){
        if(empty(request()->question_one)){
            return redirect()->back()->withErrors('Question one is required, please fill it to continue');
        }elseif(empty(request()->question_two)){
            return redirect()->back()->withErrors('Question two is required, please fill it to continue');
        }elseif(empty(request()->question_three)){
            return redirect()->back()->withErrors('Question three is required, please fill it to continue');
        }elseif(empty(request()->question_four)){
            return redirect()->back()->withErrors('Question four is required, please fill it to continue');
        }elseif(empty(request()->question_five)){
            return redirect()->back()->withErrors('Question five is required, please fill it to continue');
        }elseif(empty(request()->question_six)){
            return redirect()->back()->withErrors('Question six is required, please fill it to continue');
        }elseif(empty(request()->question_seven_one)){
            return redirect()->back()->withErrors('Question seven Roman one is required, please fill it to continue');
        }elseif(empty(request()->question_seven_two)){
            return redirect()->back()->withErrors('Question seven Roman two is required, please fill it to continue');
        }elseif(empty(request()->question_seven_three)){
            return redirect()->back()->withErrors('Question seven Roman three is required, please fill it to continue');
        }elseif(empty(request()->question_seven_four)){
            return redirect()->back()->withErrors('Question seven Roman four is required, please fill it to continue');
        }elseif(empty(request()->question_eight)){
            return redirect()->back()->withErrors('Question eight is required, please fill it to continue');
        }elseif(empty(request()->question_nine)){
            return redirect()->back()->withErrors('Question nine is required, please fill it to continue');
        }elseif(empty(request()->question_ten)){
            return redirect()->back()->withErrors('Question ten is required, please fill it to continue');
        }elseif(empty(request()->question_eleven)){
            return redirect()->back()->withErrors('Question eleven is required, please fill it to continue');
        }elseif(empty(request()->question_twelve)){
            return redirect()->back()->withErrors('Question twelve is required, please fill it to continue');
        }elseif(empty(request()->question_thirteen)){
            return redirect()->back()->withErrors('Question thirteen is required, please fill it to continue');
        }elseif(empty(request()->question_fourteen)){
            return redirect()->back()->withErrors('Question fourteen is required, please fill it to continue');
        }elseif(empty(request()->question_fifteen)){
            return redirect()->back()->withErrors('Question fifteen is required, please fill it to continue');
        }elseif(empty(request()->question_sixteen)){
            return redirect()->back()->withErrors('Question sixteen is required, please fill it to continue');
        }elseif(empty(request()->question_seventeen)){
            return redirect()->back()->withErrors('Question seventeen is required, please fill it to continue');
        }elseif(empty(request()->question_eighteen)){
            return redirect()->back()->withErrors('Question eighteen is required, please fill it to continue');
        }elseif(empty(request()->question_nineteen)){
            return redirect()->back()->withErrors('Question nineteen is required, please fill it to continue');
        }elseif(empty(request()->question_twenty)){
            return redirect()->back()->withErrors('Question twenty is required, please fill it to continue');
        }elseif(empty(request()->video_recording)){
            return redirect()->back()->withErrors("Please attach a video recording to continue");
        }
        else{
            return $this->submitAssessment();
        }
    }
}
