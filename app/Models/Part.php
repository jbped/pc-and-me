<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;
use App\Models\PartType;
use App\Models\Build;
use App\Models\BuildPart;

class Part extends Model
{
    use HasFactory;

    // protected $with = ['partType'];

    protected $fillable = [
        'part_type_id',
        'manufacturer',
        'product_name'
    ];

    public function partType()
    {
        return $this->belongsTo(PartType::class);
    }

    public function specValues()
    {
        return $this->hasMany(PartSpecValue::class);
    }

    // Get associated Builds
    public function builds()
    {
        return $this->hasManyThrough(Build::class, BuildPart::class);
    }
}
