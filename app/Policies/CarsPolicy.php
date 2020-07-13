<?php

namespace App\Policies;

use App\Cars;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarsPolicy
{
    use HandlesAuthorization;

   
    public function update(User $user, Cars $cars)
    {
        //
        return $cars->owner_id == $user->id;
    }

   
}
