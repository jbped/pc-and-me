<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Build;
use App\Models\Part;

class BuildPart extends Model
{
    use HasFactory;

    // protected $with = ['part'];

    protected $fillable = [
        'build_id',
        'part_type_id',
        'part_id',
        'description'
    ];

    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
