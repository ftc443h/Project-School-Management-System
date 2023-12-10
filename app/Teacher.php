<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tbl_teacher';
    protected $fileblees = [
        'code_teacher',
        'name_teacher',
        'birthday_teacher',
        'gender_teacher',
        'email_teacher',
        'phone_teacher',
        'address_teacher',
        'photo_teacher',
        'created_at',
        'update_at'
    ];

    public function tbl_classroom()
    {
        return $this->hasMany('App\Classroom');
    }

    public function tbl_presence_tec()
    {
        return $this->hasMany('App\PresenceT');
    }
}
