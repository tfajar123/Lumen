<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = array('product_id', 'user_id','title', 'comment', 'rating');

    public $timestamps = true;
}