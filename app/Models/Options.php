<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{

    protected $fillable = ['bebida', 'suco_fruta', 'ingrediente'];

    use HasFactory;
}
