<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BgComments extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'bg_comments';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'text', 'post_id', 'user_id'];
}
