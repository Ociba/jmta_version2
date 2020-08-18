<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Courseunit;
use App\SubcourseLecture;
use App\Answer;

class AssignmentController extends Controller
{
    //
    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }
    protected function getUploadedAssignments(){
        $get_uoploaded_assignments =Assignment::join('subcourse_lectures','assignments.subcourse_lecture_id','subcourse_lectures.id')
        ->where('assignments.status','active')
        ->select('subcourse_lectures.lecture','assignments.assignment')->get();
        return view('Admin.uploaded-assignments',compact('get_uoploaded_assignments'));
    }
    protected function getAssignment(){
        $get_assignment_answers = Answer::join('users','answers.user_id','users.id')
        ->join('assignments','answers.assignment_id','assignments.id')
        ->where('answers.status','active')
        ->select('users.name','assignments.assignment','answers.answer','answers.id','answers.mark')->get();
        return view('Admin.assignments', compact('get_assignment_answers'));
    }
    protected function getAssignmentForm(){
        $get_lecture = SubcourseLecture::get();
        return view('Admin.assignment-form', compact('get_lecture'));
    }
    protected function sendAssignmentAnswersForm(){
        $assignment = Assignment::get();
        return view('Admin.assignment-answers-form',compact('assignment'));
    }
    protected function addAssignmentMarksForm(){
        $edit_assignment_answers_form = Answer::get();
        return view('Admin.add-assignment-marks',compact('edit_assignment_answers_form'));
    }
    protected function createAssignmentMarks(Request $request,$id){
      Answer::where('id',$id)->update(array(
          'mark' =>$request->mark
      ));
      return redirect('/get-assignments')->with('msg', 'Assignment mark(s) has been added Successfully to Trainee');
    }
    protected function createAssignment(){
        $Assignment = request()->assignment;
        $assignment_original_name = $Assignment->getClientOriginalName();
        $Assignment->move('assignment-work/',$assignment_original_name);

        $assignment = new Assignment;
        $assignment->subcourse_lecture_id = request()->lecture;
        $assignment->assignment =$assignment_original_name;
        $assignment->save();
        return redirect()->back()->with('msg','Assignment has been uploaded Successfully');
    }
    protected function getMyAssignmentResults($user_id){
        $get_my_assignment_results =Answer::join('users','answers.user_id','users.id')
        ->join('assignments','answers.assignment_id','assignments.id')
        ->where('answers.user_id',auth()->user()->id)
        ->select('users.name','users.email','assignments.assignment','answers.mark','answers.answer')->get();
        return view('Admin.my_assignment_results',compact('get_my_assignment_results'));
    }
    private function createAssignmentAnswer(){
        $Assignment_answer = request()->answer;
        $answer_original_name = $Assignment_answer->getClientOriginalName();
        $Assignment_answer->move('assignment-work/',$answer_original_name);

        $answer = new Answer;
        $answer->user_id = $this->authenticated_user->getAuthenticatedUser();
        $answer->assignment_id = request()->assignment;
        $answer->answer =$answer_original_name;
        $answer->save();
        return redirect()->back()->with('msg','You have uploaded Answers File Successfully');
    }
    protected function validateAnswer(){
        if(empty(request()->answer)){
            return redirect()->back()->withErrors("Pdf file is needed");
        }else{
            return $this->createAssignmentAnswer();
        }
    }
}
