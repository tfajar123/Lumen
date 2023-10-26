<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('name', 'code_name', 'deskription', 'is_active', 'tags');

    public $timestamps = true;
}