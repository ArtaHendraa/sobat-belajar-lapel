<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialContent extends Model
{
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
