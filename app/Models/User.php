<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = array('first_name', 'last_name', 'email', 'password', 'address', 'gender', 'no_hp');

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    /*protected $hidden = [
        'password',
    ];*/
    public $timestamps = true;
}
