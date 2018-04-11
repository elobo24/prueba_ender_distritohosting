<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ender extends Model
{
  protected $table = 'ender';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'id','cedula','nombre','apellido','edad'
  ];
}
