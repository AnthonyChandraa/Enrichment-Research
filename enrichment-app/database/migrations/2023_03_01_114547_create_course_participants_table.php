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
        Schema::create('course_participants', function (Blueprint $table) {
            $table->uuid('course_id')->primary();
            $table->uuid('student_id');
            $table->uuid('step_id');
            $table->timestamp('enrolled_at');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('step_id')->references('id')->on('course_steps')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_participants');
    }
};
