<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['male','female','both']);
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('phone_number');
            $table->string('marital_status');
            $table->string('denomination');
            $table->string('ministry');
            $table->string('local_church');
            $table->string('profession');
            $table->string('occupation');
            $table->string('payment_method');
            $table->string('passport_photo');
            $table->enum('status',['pending','failed','successful'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
