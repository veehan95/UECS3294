<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeacherPolicy
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
      return $user->can('view-teacher');
    }

    /**
     * Determine if the given user can create teacher.
     *
     * @param \App\User $user
     * @return bool
     */
    public function create(User $user)
    {
      return $user->can('view-teacher');
    }

    /**
     * Determine if the given user can manage teacher.
     *
     * @param \App\User $user
     * @return bool
     */
    public function manage(User $user)
    {
      return $user->can('manage-teacher');
    }
}
