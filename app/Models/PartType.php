<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_short',
        'type_long'
    ];
}
