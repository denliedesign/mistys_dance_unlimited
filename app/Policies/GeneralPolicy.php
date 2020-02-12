<?php

namespace App\Policies;

use App\General;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GeneralPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any generals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the general.
     *
     * @param  \App\User  $user
     * @param  \App\General  $general
     * @return mixed
     */
    public function view(User $user, General $general)
    {
        //
    }

    /**
     * Determine whether the user can create generals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the general.
     *
     * @param  \App\User  $user
     * @param  \App\General  $general
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the general.
     *
     * @param  \App\User  $user
     * @param  \App\General  $general
     * @return mixed
     */
    public function delete(User $user, General $general)
    {
        //
    }

    /**
     * Determine whether the user can restore the general.
     *
     * @param  \App\User  $user
     * @param  \App\General  $general
     * @return mixed
     */
    public function restore(User $user, General $general)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the general.
     *
     * @param  \App\User  $user
     * @param  \App\General  $general
     * @return mixed
     */
    public function forceDelete(User $user, General $general)
    {
        //
    }
}
