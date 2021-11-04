<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'build_id',
        'part_type_id',
        'part_id',
        'description'
    ];
}
