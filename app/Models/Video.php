<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'video',
        'course_id',
    ];

    public function course(){
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
