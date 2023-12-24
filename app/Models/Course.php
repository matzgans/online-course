<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'description', 'duration', 'created_at', 'update_at'];

    function materials()  {
        return $this->hasMany(Material::class);
    }
}
