<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'status'
    ];

    public function student(){
        return $this->hasOne(User::class, 'id', 'from_user_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'from_user_id');
    }

}
