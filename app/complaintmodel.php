<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaintmodel extends Model
{
    protected $table='complaints';
    protected $guarded = ['id'];
}
