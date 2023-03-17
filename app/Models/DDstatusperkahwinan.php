<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DDstatusperkahwinan extends Model
{
    use HasFactory;

    protected $table = 'dd_status_perkahwinan';
    protected $guarded = ['id'];
}
