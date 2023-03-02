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
        Schema::create('course_contents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('content_type_id');
            $table->uuid('course_id');
            $table->string('title', 30);
            $table->string('description')->nullable();
            $table->string('content_url')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();

            $table->foreign('content_type_id')->references('id')->on('content_types')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('course_id')->references('id')->on('courses')
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
        Schema::dropIfExists('course_contents');
    }
};
