<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    //
    protected $table = 'marca';
    
    protected $fillable = ['nombre'];
}
