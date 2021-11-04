<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartSpec extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_type_id',
        'name',
        'data_type',
        'details'
    ];
}
