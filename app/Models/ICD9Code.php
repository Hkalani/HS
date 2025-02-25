<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ICD9Code extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'service_id' => 'integer',
        'price' => 'decimal',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function billings(): HasMany
    {
        return $this->hasMany(Billing::class);
    }
}
