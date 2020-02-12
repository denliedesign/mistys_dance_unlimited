<?php

namespace App\Policies;

use App\Performance;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PerformancePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any performances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the performance.
     *
     * @param  \App\User  $user
     * @param  \App\Performance  $performance
     * @return mixed
     */
    public function view(User $user, Performance $performance)
    {
        //
    }

    /**
     * Determine whether the user can create performances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the performance.
     *
     * @param  \App\User  $user
     * @param  \App\Performance  $performance
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the performance.
     *
     * @param  \App\User  $user
     * @param  \App\Performance  $performance
     * @return mixed
     */
    public function delete(User $user, Performance $performance)
    {
        //
    }

    /**
     * Determine whether the user can restore the performance.
     *
     * @param  \App\User  $user
     * @param  \App\Performance  $performance
     * @return mixed
     */
    public function restore(User $user, Performance $performance)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the performance.
     *
     * @param  \App\User  $user
     * @param  \App\Performance  $performance
     * @return mixed
     */
    public function forceDelete(User $user, Performance $performance)
    {
        //
    }
}
