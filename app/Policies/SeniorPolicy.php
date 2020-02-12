<?php

namespace App\Policies;

use App\Senior;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeniorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any seniors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the senior.
     *
     * @param  \App\User  $user
     * @param  \App\Senior  $senior
     * @return mixed
     */
    public function view(User $user, Senior $senior)
    {
        //
    }

    /**
     * Determine whether the user can create seniors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the senior.
     *
     * @param  \App\User  $user
     * @param  \App\Senior  $senior
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the senior.
     *
     * @param  \App\User  $user
     * @param  \App\Senior  $senior
     * @return mixed
     */
    public function delete(User $user, Senior $senior)
    {
        //
    }

    /**
     * Determine whether the user can restore the senior.
     *
     * @param  \App\User  $user
     * @param  \App\Senior  $senior
     * @return mixed
     */
    public function restore(User $user, Senior $senior)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the senior.
     *
     * @param  \App\User  $user
     * @param  \App\Senior  $senior
     * @return mixed
     */
    public function forceDelete(User $user, Senior $senior)
    {
        //
    }
}
