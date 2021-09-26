<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'for_package',
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function package(){
        return $this->hasOne(Package::class, 'id', 'for_package');
    }

    public function files(){
        return $this->hasMany(File::class, 'course_id')->orderBy('created_at', 'DESC');
    }

    public function videos(){
        return $this->hasMany(Video::class, 'course_id')->orderBy('created_at', 'DESC');
    }
}
