<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
    ];

    public function iCD9Codes(): HasMany
    {
        return $this->hasMany(ICD9Code::class);
    }

    public function billings(): HasMany
    {
        return $this->hasMany(Billing::class);
    }
}
