<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PartSpecValue;
use App\Models\PartType;

class PartSpec extends Model
{
    use HasFactory;

    // protected $with = ['partType'];

    protected $fillable = [
        'part_type_id',
        'name',
        'data_type',
        'details'
    ];

    public function partType()
    {
        return $this->belongsTo(PartType::class);
    }

    public function values()
    {
        return $this->hasMany(PartSpecValue::class);
    }
}
