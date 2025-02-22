<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Treatment extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function exersiseCharts(): BelongsToMany
    {
        return $this->belongsToMany(ExersiseChart::class);
    }

    public function exersiseRecords(): BelongsToMany
    {
        return $this->belongsToMany(ExersiseRecord::class);
    }
}
