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
     * This function deleted the revelation, can only be done by the admin
     * @test
     */
    public function deleteRevelation(){
        $this->postRevelations();
        $revelation_to_delete = Revelations::first();
        $response = $this->delete('/delete-revelation/'. $revelation_to_delete->id);
        $this->assertEquals(0, count(Revelations::all()));
    }
}
