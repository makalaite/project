<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class BgUsers extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'bg_users';

    /**
     * Fillable column names
     * @var array
     */

    protected $fillable = ['id', 'name', 'surname', 'email', 'password'];

    /**
     * $hidden is table 'vr_users' fields is hidden
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
}
