<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable=[
        'code',
        'user_id',
        'content',
        'read_at'
    ];
}
