<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = ['nome','img','preparo','bebida', 'bebida_adicional', 'suco_fruta', 'suco_fruta_adicional', 'ingrediente', 'ingrediente_adicional_1', 'ingrediente_adicional_2'];
    use HasFactory;
}
