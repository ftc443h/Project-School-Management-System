<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';
    protected $fileblees = [
        'code_student',
        'name_student',
        'gender_student',
        'birthday_student',
        'email_student',
        'phone_student',
        'address_student',
        'photo_student',
        'created_at',
        'updated_at'
    ];

    public function tbl_classroom()
    {
        return $this->hasMany('App\Classroom');
    }

    public function tbl_presence_st()
    {
        return $this->hasMany('App\PresenceS');
    }

    public function tbl_grade()
    {
        return $this->hasMany('App\Lesson');
    }
}
