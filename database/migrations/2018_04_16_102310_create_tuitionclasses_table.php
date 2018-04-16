<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuitionclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('=tuitionclasses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');;
            $table->char('class_id', 5)->unique();
            $table->string('subject', 100)->index();
            $table->string('time', 100)->index();
            $table->string('day', 100)->index();
            $table->string('effective_date', 100)->index();
            $table->string('close_date', 100)->nullable();
            $table->integer('max_sit')->nullable();
            $table->string('venue', 100)->nullable();
            $table->unsignedInteger('teacher_id')->unique();
            $table->foreign('teacher_id')
              ->references('id')->on('Teachers');
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
        Schema::dropIfExists('=tuitionclasses');
    }
}
