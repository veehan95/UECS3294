<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('student_id', 8)->unique();
            $table->string('name', 100)->index();
            $table->string('nric', 12)->nullable();
            $table->char('gender', 1)->index();
            $table->text('address')->nullable();
            $table->text('postcode')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->string('contact', 20)->nullable();
            $table->string('parent_contact', 20)->index();
            $table->string('email', 254)->nullable();
            $table->string('school', 200)->nullable();
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
        Schema::dropIfExists('students');
    }
}
