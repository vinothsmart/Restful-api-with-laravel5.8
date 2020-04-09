<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Buyer;
use App\User;

class BuyerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the buyer.
     *
     * @param  \App\User  $user
     * @param  \App\Buyer  $buyer
     * @return mixed
     */
    public function view(User $user, Buyer $buyer)
    {
        return $user->id == $buyer->id;
    }

    /**
     * Determine whether the user can purchase the something.
     *
     * @param  \App\User  $user
     * @param  \App\Buyer  $buyer
     * @return mixed
     */
    public function purchase(User $user, Buyer $buyer)
    {
        return $user->id == $buyer->id;
    }
}
