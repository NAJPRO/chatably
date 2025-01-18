<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Channel extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user1_id',
        'user2_id',
        'name'
    ];
}
