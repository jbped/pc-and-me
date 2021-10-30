<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcCase extends Model
{
    use HasFactory;

    protected $table = 'case';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
