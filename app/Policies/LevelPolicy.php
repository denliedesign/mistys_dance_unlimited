<?php

namespace App\Policies;

use App\Level;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LevelPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
