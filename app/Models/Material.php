<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'description', 'course_id', 'created_at', 'update_at'];

    function course()  {
        return $this->belongsTo(Course::class);
    }
}
