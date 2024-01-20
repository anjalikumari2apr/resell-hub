<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table='users';
    protected $guarded = ['id'];
}
