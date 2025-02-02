<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorPost extends Model
{
    use HasFactory;
    protected $fillable=[
        'author_id',
        'post_id',
    ];
}
