<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->text('question_one');
            $table->text('question_two');
            $table->text('question_if');
            $table->text('question_three');
            $table->text('question_four');
            $table->text('question_five');
            $table->text('question_six');
            $table->text('question_seven_one');
            $table->text('question_seven_two');
            $table->text('question_seven_three');
            $table->text('question_seven_four');
            $table->text('question_eight');
            $table->text('question_nine');
            $table->text('question_ten');
            $table->text('question_eleven');
            $table->text('question_twelve');
            $table->text('question_thirteen');
            $table->text('question_fourteen');
            $table->text('question_fifteen');
            $table->text('question_sixteen');
            $table->text('question_seventeen');
            $table->text('question_eighteen');
            $table->text('question_nineteen');
            $table->text('question_twenty');
            $table->integer('trainee_id');
            $table->string('video_recording');
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
        Schema::dropIfExists('assessments');
    }
}
