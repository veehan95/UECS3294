<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Student;
use App\Teacher;
use App\TuitionClass;
class ReadCsvFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     if (($handle = fopen (base_path().'\csv\users.csv', 'r' )) !== FALSE) {
       while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
        DB::table('users')->insert([
         'email' => $data[2],
         'password' => $data[3],
         'name' => $data[1],
        ]);
       }
      fclose ( $handle );
     }
      if (($handle = fopen (base_path().'\csv\students.csv', 'r' )) !== FALSE) {
        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
            $student = new Student();
            $student->id = $data[0];
            $student->name = $data[1];
            $student->nric = $data[2];
            $student->gender = $data[3];
            $student->address = $data[4];
            $student->postcode = $data[5];
            $student->city = $data[6];
            $student->state = $data[7];
            $student->contact = $data[8];
            $student->parent_contact = $data[9];
            $student->email = $data[10];
            $student->school = $data[11];
            $student->save ();
        }
        fclose ( $handle );
      }
     if (($handle = fopen (base_path().'\csv\teachers.csv', 'r' )) !== FALSE) {
       while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
           $teacher = new Teacher();
           $teacher->id = $data[0];
           $teacher->name = $data[1];
           $teacher->nric = $data[2];
           $teacher->gender = $data[3];
           $teacher->address = $data[4];
           $teacher->postcode = $data[5];
           $teacher->city = $data[6];
           $teacher->state = $data[7];
           $teacher->contact = $data[8];
           $teacher->email = $data[9];
           $teacher->education_background = $data[10];
           $teacher->save ();
       }
      fclose ( $handle );
     }
    if (($handle = fopen (base_path().'\csv\classes.csv', 'r' )) !== FALSE) {
      while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
          $classes = new TuitionClass();
          $classes->id = $data[0];
          $classes->subject = $data[1];
          $classes->time = $data[2];
          $classes->day = $data[3];
          $classes->effective_date = $data[4];
          $classes->close_date = $data[5];
          $classes->max_sit = $data[6];
          $classes->venue = $data[7];
          $classes->teacher_id = $data[8];
          $classes->save ();
      }
     fclose ( $handle );
    }
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
