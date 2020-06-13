<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 6;
}
