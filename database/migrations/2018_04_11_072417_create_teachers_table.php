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
            $table->char('teacher_id', 5)->unique();
            $table->string('name', 100)->index();
            $table->integer('age')->index();
            $table->string('ic', 12)->index();
            $table->text('address')->nullable();
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
