<?php

namespace App\Policies;

use App\User;
use App\Get;
use Illuminate\Auth\Access\HandlesAuthorization;

class GetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the get.
     *
     * @param  \App\User  $user
     * @param  \App\Get  $get
     * @return mixed
     */
    public function view(User $user, Get $get)
    {
        //
    }

    /**
     * Determine whether the user can create gets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the get.
     *
     * @param  \App\User  $user
     * @param  \App\Get  $get
     * @return mixed
     */
    public function update(User $user, Get $get)
    {
        //
    }

    /**
     * Determine whether the user can delete the get.
     *
     * @param  \App\User  $user
     * @param  \App\Get  $get
     * @return mixed
     */
    public function delete(User $user, Get $get)
    {
        //
    }
}
