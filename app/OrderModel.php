<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table='ordertable';
    protected $fillable = ['order_no'];
    protected $guarded = ['id'];
}
