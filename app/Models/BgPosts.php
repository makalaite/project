<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BgPosts extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'bg_posts';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'title', 'text', 'recource', 'user_id'];
}
