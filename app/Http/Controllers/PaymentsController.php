<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function makeMobileMoneyTransaction(){
        //http://pesamoni.com/api/live/v1/transactions
    }
    protected function getPaymentMethod(){
        return view('Admin.payment_methods');
    }
}
