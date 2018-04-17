<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class InitRolesAndPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Define roles
      $admin = Bouncer::role()->create([
        'name' => 'admin',
        'title' => 'Administrator',
      ]);
      $teacher = Bouncer::role()->create([
        'name' => 'teacher',
        'title' => 'Teacher',
      ]);

      // Define abilities
      $viewStudent = Bouncer::ability()->create([
        'name' => 'view-student',
        'title' => 'View Student',
      ]);
      $createStudent = Bouncer::ability()->create([
        'name' => 'create-student',
        'title' => 'Create Student',
      ]);
      $manageStudent = Bouncer::ability()->create([
        'name' => 'manage-student',
        'title' => 'Manage Student',
      ]);
      $viewTeacher = Bouncer::ability()->create([
        'name' => 'view-teacher',
        'title' => 'View Teacher',
      ]);
      $createTeacher = Bouncer::ability()->create([
        'name' => 'create-teacher',
        'title' => 'Create Teacher',
      ]);
      $manageTeacher = Bouncer::ability()->create([
        'name' => 'manage-teacher',
        'title' => 'Manage Teacher',
      ]);
      $viewClass = Bouncer::ability()->create([
        'name' => 'view-class',
        'title' => 'View Class',
      ]);
      $createClass = Bouncer::ability()->create([
        'name' => 'create-class',
        'title' => 'Create Class',
      ]);
      $manageClass = Bouncer::ability()->create([
        'name' => 'manage-class',
        'title' => 'Manage Class',
      ]);
      // Assign abilities to roles
      Bouncer::allow($admin)->to($viewStudent);
      Bouncer::allow($admin)->to($createStudent);
      Bouncer::allow($admin)->to($manageStudent);
      Bouncer::allow($admin)->to($viewTeacher);
      Bouncer::allow($admin)->to($createTeacher);
      Bouncer::allow($admin)->to($manageTeacher);
      Bouncer::allow($admin)->to($viewClass);
      Bouncer::allow($admin)->to($createClass);
      Bouncer::allow($admin)->to($manageClass);
      Bouncer::allow($teacher)->to($viewStudent);
      Bouncer::allow($teacher)->to($viewTeacher);
      Bouncer::allow($teacher)->to($viewClass);

      Bouncer::assign('admin')->to(User::find(1));
      Bouncer::assign('admin')->to(User::find(2));
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
