<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dun extends Model
{
    use HasFactory;

    protected $table = 'dd_dun';
    protected $guarded = ['id'];
}
