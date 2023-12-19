<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'users';
    protected $filebles =  ([
        'name',
        'email',
        'password',
        'phone_users',
        'address_users',
        'photo',
        'role_users',
        'isactive',
        'status_users'
    ]);
}
