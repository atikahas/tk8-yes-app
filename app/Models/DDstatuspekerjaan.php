<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DDstatuspekerjaan extends Model
{
    use HasFactory;

    protected $table = 'dd_status_pekerjaan';
    protected $guarded = ['id'];
}