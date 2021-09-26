<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'document',
        'course_id',
    ];

    public function course(){
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
