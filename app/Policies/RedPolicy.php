<?php

namespace App\Policies;

use App\Models\Red;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RedPolicy
{
    use HandlesAuthorization;

    public function autor(User $user, Red $red){
        if($user->name==$red->Usuario_Creador){
            return true;
        }
        return false;
    }
}
