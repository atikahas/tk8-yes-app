<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BorangMaklumat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'borang_maklumat';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
