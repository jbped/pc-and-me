<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PartSpec;
use App\Models\Part;
use App\Models\BuildPart;

class PartType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_short',
        'type_long'
    ];

    public function typeSpecs()
    {
        return $this->hasMany(PartSpec::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function buildParts()
    {
        return $this->hasMany(BuildPart::class);
    }
}
