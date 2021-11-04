<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Part;
use App\Models\BuildPart;

class Build extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'description',
        'operating_system',
    ];

    public function parts()
    {
        $parts = $this->hasManyThrough(Part::class, BuildPart::class);
        return $parts;
    }
}
