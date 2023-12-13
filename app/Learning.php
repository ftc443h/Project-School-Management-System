<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    protected $table = 'tbl_learning';
    protected $fileblees = [
        'learning_class',
        'category_class',
        'created_at',
        'update_at'
    ];

    public function tbl_classroom()
    {
        return $this->hasMany('App\Classroom');
    }

    public function tbl_grade()
    {
        return $this->hasMany('App\Lesson');
    }
}
