<?php

namespace App\ApiCore\Auth\Repositories\Interfaces;
use App\ApiCore\Users\User;

interface AuthRepositoryInterface {
    public function register(): User;
    public function login(): User;
    public function logout(): bool;
}
