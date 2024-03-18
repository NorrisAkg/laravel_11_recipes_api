<?php

namespace App\ApiCore\Auth\Repositories;
use App\ApiCore\Users\User;
use App\ApiCore\Auth\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;

class AuthRepository implements AuthRepositoryInterface {
    public function register(array $requestData): User {
        $user = new User(Arr::except($requestData, ["picture"]));

        if(isset($requestData["picture"]) && $requestData["picture"] instanceof UploadedFile) {
            
        }

        return new User();
    }

    public function login(): User {
        return new User();
    }

    public function logout(): bool {
        return true;
    }
}
