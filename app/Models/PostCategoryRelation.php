<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategoryRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'post_category_id'
    ];
    

}
