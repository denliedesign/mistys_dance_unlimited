<?php

namespace App\Policies;

use App\Rehearsal;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RehearsalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any rehearsals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the rehearsal.
     *
     * @param  \App\User  $user
     * @param  \App\Rehearsal  $rehearsal
     * @return mixed
     */
    public function view(User $user, Rehearsal $rehearsal)
    {
        //
    }

    /**
     * Determine whether the user can create rehearsals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the rehearsal.
     *
     * @param  \App\User  $user
     * @param  \App\Rehearsal  $rehearsal
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the rehearsal.
     *
     * @param  \App\User  $user
     * @param  \App\Rehearsal  $rehearsal
     * @return mixed
     */
    public function delete(User $user, Rehearsal $rehearsal)
    {
        //
    }

    /**
     * Determine whether the user can restore the rehearsal.
     *
     * @param  \App\User  $user
     * @param  \App\Rehearsal  $rehearsal
     * @return mixed
     */
    public function restore(User $user, Rehearsal $rehearsal)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the rehearsal.
     *
     * @param  \App\User  $user
     * @param  \App\Rehearsal  $rehearsal
     * @return mixed
     */
    public function forceDelete(User $user, Rehearsal $rehearsal)
    {
        //
    }
}
