<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * This function returns the payment methods
     */
    protected function getPaymentMethod($id){
        return redirect('/get-enrollment-form/'.$id);
        return view('Admin.payment_methods');
    }
    /**
     * this function calls the payment depending on the users selection
     */
    public function makeAPayment(){
        if(request()->payment_method == "mobile_money"){
            return $this->payment_instance->paymentByMobileMoney();
        }
        elseif(request()->payment_method == "visa_card"){
            return $this->payment_instance->paymentByVisa();
        }
        elseif(request()->payment_method == 'master_card'){
            return $this->payment_instance->paymentByMasterCard();
        }
        elseif(request()->payment_method == 'world_remit'){
            return $this->payment_instance->paymentByWorldRemit();
        }
        elseif(request()->payment_method == 'cash'){
            return $this->payment_instance->paymentByCash();
        }
    }
    /**
     * This function makes the mobile money payments
     */
    private function paymentByMobileMoney(){
        //http://pesamoni.com/api/live/v1/transactions
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the visa card payments
     */
    private function paymentByVisa(){
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the worldRemit payment
     */
    private function paymentByWorldRemit(){
         //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes the master card payments
     */
    private function paymentByMasterCard(){
        //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }

    /**
     * This function makes payment by cash
     */
    private function paymentByCash(){
         //After the Transaction is successfull, call the enrollment method to continue
        return $this->enrollment_instance->enrollNewTrainee();
    }
}
