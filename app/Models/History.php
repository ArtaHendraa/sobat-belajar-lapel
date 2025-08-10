<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $fillable = [
        'id',
        'course_id',
        'user_id'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
