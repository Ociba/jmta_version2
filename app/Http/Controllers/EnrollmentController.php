<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;

class EnrollmentController extends Controller
{
    //creating an instance of payment
    public function __construct(){
        $this->payment_instance = new PaymentsController;
        $this->authenticated_user_instance = new AuthenticatedUserController;
    }
    protected function getEnrollmentInformation(){
       $all_courses_enrolled =Enrollment::join('courses','enrollments.course_id','courses.id')
        ->where('courses.status','active')
        ->select('courses.course_name','courses.created_at','enrollments.first_name','enrollments.last_name','enrollments.email','enrollments.id')->get();
        return view('Admin.all_enrolled_courses',compact('all_courses_enrolled'));
    }
    protected function getIndividualEnrollmentInformation($course_id){
        $individual_enrollment_information = Enrollment::join('courses','enrollments.course_id','courses.id')
        ->where('enrollments.id',$course_id)
        ->select('enrollments.*','enrollments.id','courses.course_name')
        ->get();
        return view('Admin.enrollment_data',compact('individual_enrollment_information'));
    }
    protected function getEnrollmentForm(){
        if(in_array('Can view enrollment form', auth()->user()->getUserPermisions())){
        return view('Admin.enrollment_form');
        }else{
            abort('404');
        }
    }
    /*
     *   this function created an enrollment form
     * Before enrollment, payment must occur
    */
    private function enrollNewTrainee(){
        $this->payment_instance->makeAPayment();

        $save_enrollment_image = request()->passport_photo;
        $enrollment_original_name = $save_enrollment_image->getClientOriginalName();
        $save_enrollment_image->move('enrollment-photos/',$enrollment_original_name);

        $enrollment = new Enrollment;
        $enrollment->email = $this->authenticated_user_instance->getAuthenticatedUserEmail();
        $enrollment->first_name = request()->first_name;
        $enrollment->last_name = request()->last_name;
        $enrollment->gender  = request()->gender;
        $enrollment->date_of_birth = request()->date_of_birth;
        $enrollment->nationality = request()->nationality;
        $enrollment->country = request()->country;
        $enrollment->state = request()->state;
        $enrollment->city = request()->city;
        $enrollment->phone_number = request()->phone_number;
        $enrollment->marital_status = request()->marital_status;
        $enrollment->denomination = request()->denomination;
        $enrollment->ministry = request()->ministry;
        $enrollment->local_church = request()->local_church;
        $enrollment->profession = request()->profession;
        $enrollment->occupation = request()->occupation;
        $enrollment->payment_method = request()->payment_method;
        $enrollment->passport_photo =$enrollment_original_name;
        $enrollment->course_id      = request()->course_id;
        $enrollment->save();
        return redirect("/get-course-unit/".request()->course_id)->with('msg', 'Your enrollment was successfuly recieved');
    }
    
    /**
     * This function validates the enrollment form
     */
    protected function validateEnrollment(){
        if(empty(request()->first_name)){
            return redirect()->back()->withErrors('First name is required, please enter it to continue');
        }elseif(empty(request()->last_name)){
            return redirect()->back()->withErrors('Last name is required, please enter it to continue');
        }elseif(empty(request()->gender)){
            return redirect()->back()->withErrors('Please select atleast one gender to continue');
        }elseif(empty(request()->date_of_birth)){
            return redirect()->back()->withErrors('Please enter your date of birth to continue');
        }elseif(empty(request()->nationality)){
            return redirect()->back()->withErrors('Please enter your nationality to continue');
        }elseif(empty(request()->country)){
            return redirect()->back()->withErrors('please enter your country to continue');
        }elseif(empty(request()->state)){
            return redirect()->back()->withErrors('Please enter your state to continue');
        }elseif(empty(request()->city)){
            return redirect()->back()->withErrors("Please enter your city to continue");
        }elseif(empty(request()->phone_number)){
            return redirect()->back()->withErrors("please enter the phone number to continue");
        }elseif(empty(request()->marital_status)){
            return redirect()->back()->withErrors("Please select your marital status to continue");
        }elseif(empty(request()->denomination)){
            return redirect()->back()->withErrors("Please enter your denomination to continue");
        }elseif(empty(request()->ministry)){
            return redirect()->back()->withErrors("Please enter your ministry to continue");
        }elseif(empty(request()->local_church)){
            return redirect()->back()->withErrors("Please enter your local church to continue");
        }elseif(empty(request()->profession)){
            return redirect()->back()->withErrors("Please Enter your profession to continue");
        }elseif(empty(request()->occupation)){
            return redirect()->back()->withErrors("Please Enter your occupation to continue");
        }elseif(empty(request()->payment_method)){
            return redirect()->back()->withErrors("You must choose atleat one payment method to continue");
        }elseif(empty(request()->passport_photo)){
            return redirect()->back()->withErrors("Please attach your passport photo to continue");
        }else{
            return $this->enrollNewTrainee();
        }
    }
    protected function changePaymentStatus($id){
        Enrollment::where('id',$id)->update(array('payment_status' =>'successful'));
        return redirect()->back()->with('msg','You have changed Payment status for Enrollment to successfull');
    }
}
