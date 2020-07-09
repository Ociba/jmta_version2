<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Revelations;

class RevelationsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * This function captures the users revelations, user sends on revelations at a time
     * revelations are saved per day
     * @test
     */
    public function postRevelations(){
        $this->withoutExceptionHandling();
        $response = $this->post('/create-my-revelation',[
            'trainee_id'       => 1,
            'revelation_one'   => "God is creator",
            'revelation_two'   => "God is creator again",
            'revelation_three' => "God is soo good",
            'revelation_four'  => "God is So So Good",
            'revelation_five'  => "God is So Excellent",
            'revelation_six'   => "I am a child of God",
            'revelation_seven' => "I am born by God"
        ]);
        $this->assertDatabaseHas('revelations',['revelation_seven' => 'I am born by God']);
    }
    /**
     * This function gets the revelations posted by the trainee them selves
     * @test
     */
    public function getMyRevelations(){
        $this->postRevelations();
        $my_revelations = Revelations::first();
        $response = $this->get('/get-my-revelations/'.$my_revelations->id);
        $this->assertCount(1, Revelations::find($my_revelations));
    }
    /**
     * This function deleted the revelation, can only be done by the admin
     * @test
     */
    public function deleteRevelation(){
        $this->postRevelations();
        $revelation_to_delete = Revelations::first();
        $response = $this->delete('/delete-revelation/'. $revelation_to_delete->id);
        $this->assertEquals(0, count(Revelations::all()));
    }

    /**
     * This function gets all revelations from the users by the admin
     */
    public function getAllRevelations(){
        $this->postRevelations();
        $response = $this->get('/get-all-revelations');
        $this->assertEquals(0, count(Revelations::all()));
    }

}
