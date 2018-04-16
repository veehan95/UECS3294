<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Student;
use App\Teacher;
class ReadCsvFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (($handle = fopen (base_path().'\csv\students.csv', 'r' )) !== FALSE) {
        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
            $student = new Student();
            $student->id = $data [0];
            $student->student_id = $data [1];
            $student->name = $data [2];
            $student->nric = $data [3];
            $student->gender = $data [4];
            $student->address = $data [5];
            $student->postcode = $data [6];
            $student->city = $data [7];
            $student->state = $data [8];
            $student->contact = $data [9];
            $student->parent_contact = $data [10];
            $student->email = $data [11];
            $student->school = $data [12];
            $student->save ();
        }
        fclose ( $handle );
      }
        if (($handle = fopen (base_path().'\csv\teachers.csv', 'r' )) !== FALSE) {
          while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
              $teacher = new Teacher();
              $teacher->id = $data [0];
              $teacher->teacher_id = $data [1];
              $teacher->name = $data [2];
              $teacher->nric = $data [3];
              $teacher->gender = $data [4];
              $teacher->address = $data [5];
              $teacher->postcode = $data [6];
              $teacher->city = $data [7];
              $teacher->state = $data [8];
              $teacher->contact = $data [9];
              $teacher->email = $data [10];
              $teacher->education_background = $data [11];
              $teacher->save ();
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
