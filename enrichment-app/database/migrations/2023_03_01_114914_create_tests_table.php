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
        Schema::create('tests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('course_id');
            $table->uuid('test_type_id');
            $table->string('name', 10);
            $table->integer('timelimit');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('test_type_id')->references('id')->on('test_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
