<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = array('user_id', 'product_name', 'total_amount', 'total_price', 'shipment_address', 'status', 'payment_methods');

    public $timestamps = true;
}