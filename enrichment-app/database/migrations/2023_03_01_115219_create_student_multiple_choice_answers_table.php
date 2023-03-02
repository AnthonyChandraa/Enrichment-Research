<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_multiple_choice_answers', function (Blueprint $table) {
            $table->uuid('question_id');
            $table->uuid('student_id');
            $table->uuid('choice_id');
            $table->timestamps();

            $table->primary(['question_id', 'student_id']);
            $table->foreign('question_id')->references('id')->on('questions')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('student_id')->references('id')->on('students')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('choice_id')->references('id')->on('multiple_choice_options')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_multiple_choice_answers');
    }
};
