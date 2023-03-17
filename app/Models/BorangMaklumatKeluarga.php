<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BorangMaklumatKeluarga extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'borang_maklumat_keluarga';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
