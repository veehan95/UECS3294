<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*DB::table('Students')->insert([
      'id' => 1234,
      'student_id' => '1234',
      'gender' => 'f',
      'name' => '1234',
      'age' => 14,
      'nric' => 1234,
      'address' => '1234',
      'contact' => 1234,
      'parents_contact' => 1234,
      'email' => 'admin@admin.com',
      'school' => 'null',
    ]);*/
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
