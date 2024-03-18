<?php

namespace App\ApiCore\Users\Repositories;
use App\ApiCore\Users\User;
use App\ApiCore\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function findById($id): User {
        return User::find($id);
    }
}
