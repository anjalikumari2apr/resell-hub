<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    protected $table='slidesetting';
    protected $guarded = ['id'];   
}
