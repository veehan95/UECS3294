<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClassPolicy
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
     * Determine if the given user can view class.
     *
     * @param \App\User $user
     * @return bool
     */
    public function view(User $user)
    {
      return $user->can('view-class');
    }

    /**
     * Determine if the given user can create class.
     *
     * @param \App\User $user
     * @return bool
     */
    public function create(User $user)
    {
      return $user->can('view-class');
    }

    /**
     * Determine if the given user can manage class.
     *
     * @param \App\User $user
     * @return bool
     */
    public function manage(User $user)
    {
      return $user->can('manage-class');
    }
}
