<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('id_category', 'name', 'description', 'price', 'merek', 'stok', 'status');

    public $timestamps = true;
}