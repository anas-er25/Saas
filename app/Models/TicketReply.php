<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketReply extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'code',
        'ticket_id',
        'user_id',
        'message'
    ];

}
