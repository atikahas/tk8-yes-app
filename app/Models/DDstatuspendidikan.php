<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DDstatuspendidikan extends Model
{
    use HasFactory;

    protected $table = 'dd_status_pendidikan';
    protected $guarded = ['id'];
}
