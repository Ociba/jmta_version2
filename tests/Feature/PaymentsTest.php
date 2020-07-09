<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * This controller caters :
     * 1. Mobile money (Using Pesamoni),
     * 2.Visa integration,
     * 3. Pesapal
     * 4. World Remit
     * @test
     */
    public function makeMobileMoneyPayment(){
        //This function makes mobile money payments
        $response = $this->post('/test-api');
    }

    public function makeVisaPayment(){
        //This function makes the visa payment
    }

    public function makePesaPalPayment(){
        //This function makes the pesa pal payment
    }

    public function makeWorlRemitPayment(){
        //This function makes the worlremit payment
    }

}
