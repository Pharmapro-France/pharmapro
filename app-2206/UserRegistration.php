<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegistration extends Model
{
    protected $table = 'users';
    protected $guarded = ['id'];
}
