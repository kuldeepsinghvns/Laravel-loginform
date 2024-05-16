<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    protected $fillable = ['name,password'];
    protected $table='ecommerce';
    protected $primarykey='id';
}