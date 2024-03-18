<?php

namespace App\ApiCore\Users\Repositories\Interfaces;

use App\ApiCore\Users\User;

interface UserRepositoryInterface {
    public function findById($id): User;
}
