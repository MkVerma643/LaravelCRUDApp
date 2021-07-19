<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Book extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'books';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}
