<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //creating an instance of payment
    public function __construct(){
        $this->payment_instance = new PaymentsController;
    }

    protected function getEnrollmentForm(){
        return view('Admin.enrollment_form');
    }
    /*
     *   this function created an enrollment form
     * Before enrollment, payment must occur
    */
    private function enrollNewTrainee(){
        $this->payment_instance->makeAPayment();
        $enrollment = new Enrollment;
        $enrollment->email = auth()->user()->email;
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
        $enrollment->passport_photo = request()->passport_photo;
        $enrollment->save();
        return redirect()->back()->with('msg', 'Your enrollment was successfuly');
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
}
