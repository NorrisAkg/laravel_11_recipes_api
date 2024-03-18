<?php

namespace App\ApiCore\Users;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = [
        "name",
        "description",
    ];
}
