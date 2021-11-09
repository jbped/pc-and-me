<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Part;
use App\Models\PartSpec;

class PartSpecValue extends Model
{
    use HasFactory;

    // protected $with = ['spec'];

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

    public function spec()
    {
        return $this->belongsTo(PartSpec::class);
    }
}
