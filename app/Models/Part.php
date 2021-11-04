<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_type_id',
        'manufacturer',
        'product_name'
    ];

    public function associatedBuilds()
    {
        return $this->hasManyThrough(Build::class, BuildPart::class);
    }

    public function partSpecs()
    {
        return $this->hasMany(PartSpecValue::class);
    }
}
