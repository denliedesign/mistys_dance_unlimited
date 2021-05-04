<?php

namespace App\Policies;

use App\Fest;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any fests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the fest.
     *
     * @param  \App\User  $user
     * @param  \App\Fest  $fest
     * @return mixed
     */
    public function view(User $user, Fest $fest)
    {
        //
    }

    /**
     * Determine whether the user can create fests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the fest.
     *
     * @param  \App\User  $user
     * @param  \App\Fest  $fest
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);

    }

    /**
     * Determine whether the user can delete the fest.
     *
     * @param  \App\User  $user
     * @param  \App\Fest  $fest
     * @return mixed
     */
    public function delete(User $user, Fest $fest)
    {
        //
    }

    /**
     * Determine whether the user can restore the fest.
     *
     * @param  \App\User  $user
     * @param  \App\Fest  $fest
     * @return mixed
     */
    public function restore(User $user, Fest $fest)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the fest.
     *
     * @param  \App\User  $user
     * @param  \App\Fest  $fest
     * @return mixed
     */
    public function forceDelete(User $user, Fest $fest)
    {
        //
    }
}
