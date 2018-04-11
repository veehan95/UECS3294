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
            $table->increments('id');;
            $table->char('student_id', 5)->unique();
            $table->string('name', 100)->index();
            $table->integer('age')->index();
            $table->string('ic', 12)->nullable();
            $table->text('address')->nullable();
            $table->string('contact', 20)->nullable();
            $table->string('parents_contact', 20)->index();
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
