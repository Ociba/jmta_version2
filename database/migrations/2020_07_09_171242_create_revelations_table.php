<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revelations', function (Blueprint $table) {
            $table->id();
            $table->integer('trainee_id');
            $table->text('revelation_one');
            $table->text('revelation_two');
            $table->text('revelation_three');
            $table->text('revelation_four');
            $table->text('revelation_five');
            $table->text('revelation_six');
            $table->text('revelation_seven');
            $table->integer('day_number');
            $table->enum('status',['active','inactive','deleted'])->default('active');
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
        Schema::dropIfExists('revelations');
    }
}
