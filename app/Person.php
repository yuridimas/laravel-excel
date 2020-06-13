<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'address'];
    
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 6;
}
