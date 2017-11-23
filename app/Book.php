<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'TITLE', 'NBPAGE', 'GENRE',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
