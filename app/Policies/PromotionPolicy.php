<?php

namespace App\Policies;

use App\User;
use App\Promotion;
use Illuminate\Auth\Access\HandlesAuthorization;

class PromotionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any promotions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }


    /**
     * Determine whether the user can view the promotion.
     *
     * @param  \App\User  $user
     * @param  \App\Promotion  $promotion
     * @return mixed
     */
    public function view(User $user, Promotion $promotion)
    {
        //
    }

    /**
     * Determine whether the user can create promotions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the promotion.
     *
     * @param  \App\User  $user
     * @param  \App\Promotion  $promotion
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the promotion.
     *
     * @param  \App\User  $user
     * @param  \App\Promotion  $promotion
     * @return mixed
     */
    public function delete(User $user, Promotion $promotion)
    {
        //
    }

    /**
     * Determine whether the user can restore the promotion.
     *
     * @param  \App\User  $user
     * @param  \App\Promotion  $promotion
     * @return mixed
     */
    public function restore(User $user, Promotion $promotion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the promotion.
     *
     * @param  \App\User  $user
     * @param  \App\Promotion  $promotion
     * @return mixed
     */
    public function forceDelete(User $user, Promotion $promotion)
    {
        //
    }
}
