<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresenceS extends Model
{
    protected $table = 'tbl_presence_st';
    protected $fileblees = [
        'date_stud',
        'status_stud',
        'tbl_student_id',
        'created_at',
        'update_at'
    ];
    public function tbl_student()
    {
        return $this->belongsTo('App\Student');
    }
}