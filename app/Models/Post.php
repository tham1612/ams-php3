<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory_id',
        'name',
        'slug',
        'img_thumbnail',
        'description',
        'content',
        'view',
        'is_active',
        'is_hot_deal',
        'is_good_deal',
        'is_new',
        'is_show_home',
        'published_date',
        'likes',
        'comments_count',
    ];
    protected $casts=[
        'is_active'=>'boolean',
        'is_hot_deal'=>'boolean',
        'is_good_deal'=>'boolean',
        'is_new'=>'boolean',
        'is_show_home'=>'boolean',
    ];
}
