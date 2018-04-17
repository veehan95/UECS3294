<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given user can view teachers.
     *
     * @param \App\User $user
     * @return bool
     */
    public function view(User $user)
    {
      return $user->can('view-student');
    }

    /**
     * Determine if the given user can create students.
     *
     * @param \App\User $user
     * @return bool
     */
    public function create(User $user)
    {
      return $user->can('view-student');
    }

    /**
     * Determine if the given user can manage student.
     *
     * @param \App\User $user
     * @return bool
     */
    public function manage(User $user)
    {
      return $user->can('manage-student');
    }
}
