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
        Schema::create('journal_details', function (Blueprint $table) {
            $table->uuid('journal_id');
            $table->uuid('lecturer_id');
            $table->timestamps();

            $table->primary(['journal_id', 'lecturer_id']);
            $table->foreign('journal_id')->references('id')->on('journals')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
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
        Schema::dropIfExists('journal_details');
    }
};
