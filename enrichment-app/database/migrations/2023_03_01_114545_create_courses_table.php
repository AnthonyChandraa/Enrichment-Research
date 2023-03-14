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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('lecturer_id');
            $table->string('name',50);
            $table->string('image_url')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(false);
            $table->uuid('course_code_id');
            $table->timestamps();

            $table->foreign('lecturer_id')->references('id')->on('lecturers')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('course_code_id')->references('id')->on('course_codes')
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
        Schema::dropIfExists('courses');
    }
};
