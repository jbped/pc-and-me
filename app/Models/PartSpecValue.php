<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Part;

class PartSpecValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_id',
        'part_spec_id',
        'data_type',
        'int_value',
        'string_value',
        'text_value',
        'boolean_value',
    ];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
