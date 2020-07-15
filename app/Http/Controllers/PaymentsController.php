<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{

    // creating an instance of the Enrollment Method
    public function __construct(){
        $this->enrollment_instance = new EnrollmentController; 
    }
    /**
     * This function returns the payment methods
     */
    protected function getPaymentMethod(){
        return view('Admin.payment_methods');
    }
    /**
     * This function makes the mobile money payments
     */
    public function paymentByMobileMoney(){
        //http://pesamoni.com/api/live/v1/transactions
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the visa card payments
     */
    public function paymentByVisa(){
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the worldRemit payment
     */
    public function paymentByWorldRemit(){
         //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the master card payments
     */
    public function paymentByMasterCard(){
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes payment by cash
     */
    public function paymentByCash(){
         //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }
}
