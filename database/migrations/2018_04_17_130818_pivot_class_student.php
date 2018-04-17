<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotClassStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piviot_cs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->char('student_id', 8);
            $table->char('class_id', 8);
            $table->timestamps();
        });

        Schema::table('piviot_cs', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')
              ->on('students')->onDelete('cascade');
            $table->foreign('class_id')->references('id')
              ->on('tuition_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
