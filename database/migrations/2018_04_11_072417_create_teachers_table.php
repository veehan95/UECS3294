<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');;
            $table->char('teacher_id', 8)->unique();
            $table->string('name', 100)->index();
            $table->string('nric', 12)->unique();
            $table->char('gender', 1)->index();
            $table->text('address')->nullable();
            $table->text('postcode')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->string('contact', 20)->index();
            $table->string('email', 254)->nullable();
            $table->text('education_background')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
