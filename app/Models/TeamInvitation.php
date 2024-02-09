<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamInvitation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'email',
        'user_id',
        'team_id',
        'token',
    ];
}
