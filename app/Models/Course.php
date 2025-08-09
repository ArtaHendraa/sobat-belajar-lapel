<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function material()
    {
        return $this->hasMany(Material::class);
    }
}
