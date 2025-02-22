<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YearlyBillingTotal extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'amount_due' => 'decimal',
        'member_id' => 'integer',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
