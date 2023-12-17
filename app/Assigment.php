<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    protected $table = 'tbl_assigment';
    protected $fileblees = 
    [
        'file_assigment',
        'clock_assigment',
        'tbl_student_id'
    ];

    public function tbl_student()
    {
        return $this->belongsTo('App\Student');
    }
}
