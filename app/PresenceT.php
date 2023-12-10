<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresenceT extends Model
{
    protected $table = 'tbl_presence_tec';
    protected $fileblees = [
        'date_teac',
        'status_teac',
        'tbl_teacher_id',
        'created_at',
        'update_at'
    ];
    public function tbl_teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}