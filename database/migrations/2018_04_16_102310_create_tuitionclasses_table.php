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
        Schema::create('tuition_classes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->char('id', 8)->unique();
            $table->primary('id');
            $table->string('subject', 4)->index();
            $table->time('start_time');
            $table->time('end_time');
            $table->char('day', 3)->index();
            $table->date('effective_date', 100)->index();
            $table->date('close_date', 100)->nullable();
            $table->integer('max_sit')->nullable();
            $table->string('venue', 100)->nullable();
            $table->char('teacher_id', 8);
            $table->timestamps();
        });

        Schema::table('tuition_classes', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')
              ->on('teachers')->onDelete('cascade');
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
