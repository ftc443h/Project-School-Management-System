<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'tbl_grade';
    protected $fileblees = [
        'dailytasks_grade',
        'uts_grade',
        'uas_grade',
        'tbl_learning_id',
        'tbl_student_id',
        'created_at',
        'update_at'
    ];

    public function tbl_learning()
    {
        return $this->belongsTo('App\Learning');
    }

    public function tbl_student()
    {
        return $this->belongsTo('App\Student');
    }
}
