<?php

namespace App\Models;

use App\Http\Controllers\Course;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function materialContent()
    {
        return $this->hasMany(MaterialContent::class);
    }
}
