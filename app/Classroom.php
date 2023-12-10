<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'tbl_classroom';
    protected $fileblees = [
        'name_teacher',
        'offline_classroom',
        'online_classroom',
        'learning_classroom',
        'clock_start',
        'clock_end',
        'date',
        'tbl_student_id',
        'tbl_teacher_id',
        'created_at',
        'update_at',
        'users_id',
    ];

    public function tbl_teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function tbl_student()
    {
        return $this->belongsTo('App\Student');
    }
    public function tbl_learning()
    {
        return $this->belongsTo('App\Learning');
    }
    public function users()
    {
        return $this->belongsTo('App\Users');
    }
}
