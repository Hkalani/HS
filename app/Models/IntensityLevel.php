<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IntensityLevel extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
    ];

    public function exerciseRecordCharts(): HasMany
    {
        return $this->hasMany(ExerciseRecordChart::class);
    }
}
