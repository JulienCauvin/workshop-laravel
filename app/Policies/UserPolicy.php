<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function delete(User $authenticatedUser, User $userToDelete): bool
    {
        return !$userToDelete->is($authenticatedUser);
    }
}
