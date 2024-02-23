<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    protected $fillable = ['id','name','password'];
    protected $table = 'signup';
    protected $unique = 'username';
}



