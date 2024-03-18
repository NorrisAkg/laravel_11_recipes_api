<?php

namespace App\ApiCore\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class User extends  Authenticatable {
    use HasApiTokens, HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "username",
        "password",
        "address",
        "telephone",
        "picture",
    ];

    protected $hidden = [
        "password",
    ];

    protected function casts() {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

}
