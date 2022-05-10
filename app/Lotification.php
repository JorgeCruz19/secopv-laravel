<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotification extends Model
{
    protected $fillable = ['nombre', 'departamento', 'ciudad', 'precio'];
    /*    protected $table = 'lotifications'; */
}
