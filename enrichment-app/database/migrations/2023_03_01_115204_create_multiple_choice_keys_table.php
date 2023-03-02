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
        Schema::create('multiple_choice_keys', function (Blueprint $table) {
            $table->uuid('question_id')->primary();
            $table->uuid('choice_id');
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('questions')
                ->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('multiple_choice_keys');
    }
};
