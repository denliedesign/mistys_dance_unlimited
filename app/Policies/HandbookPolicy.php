<?php

namespace App\Policies;

use App\Handbook;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HandbookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any handbooks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the handbook.
     *
     * @param  \App\User  $user
     * @param  \App\Handbook  $handbook
     * @return mixed
     */
    public function view(User $user, Handbook $handbook)
    {
        //
    }

    /**
     * Determine whether the user can create handbooks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the handbook.
     *
     * @param  \App\User  $user
     * @param  \App\Handbook  $handbook
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the handbook.
     *
     * @param  \App\User  $user
     * @param  \App\Handbook  $handbook
     * @return mixed
     */
    public function delete(User $user, Handbook $handbook)
    {
        //
    }

    /**
     * Determine whether the user can restore the handbook.
     *
     * @param  \App\User  $user
     * @param  \App\Handbook  $handbook
     * @return mixed
     */
    public function restore(User $user, Handbook $handbook)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the handbook.
     *
     * @param  \App\User  $user
     * @param  \App\Handbook  $handbook
     * @return mixed
     */
    public function forceDelete(User $user, Handbook $handbook)
    {
        //
    }
}
