<?php

namespace App\Policies;

use App\Hub;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HubPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any hubs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the hub.
     *
     * @param  \App\User  $user
     * @param  \App\Hub  $hub
     * @return mixed
     */
    public function view(User $user, Hub $hub)
    {
        //
    }

    /**
     * Determine whether the user can create hubs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the hub.
     *
     * @param  \App\User  $user
     * @param  \App\Hub  $hub
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the hub.
     *
     * @param  \App\User  $user
     * @param  \App\Hub  $hub
     * @return mixed
     */
    public function delete(User $user, Hub $hub)
    {
        //
    }

    /**
     * Determine whether the user can restore the hub.
     *
     * @param  \App\User  $user
     * @param  \App\Hub  $hub
     * @return mixed
     */
    public function restore(User $user, Hub $hub)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the hub.
     *
     * @param  \App\User  $user
     * @param  \App\Hub  $hub
     * @return mixed
     */
    public function forceDelete(User $user, Hub $hub)
    {
        //
    }
}
