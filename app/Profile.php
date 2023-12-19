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

    public function tbl_teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function tbl_student()
    {
        return $this->belongsTo('App\Student');
    }
}
