<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parlimen extends Model
{
    use HasFactory;

    protected $table = 'dd_parlimen';
    protected $guarded = ['id'];
}
