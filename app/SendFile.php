<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class SendFile extends Model
{
 protected $fillable=['id','filename','url'];
 protected $table='uplodedfiles';
 protected $primarykey='id';
}