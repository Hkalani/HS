<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
    ];

    public function iCD9Codes(): BelongsToMany
    {
        return $this->belongsToMany(ICD9Code::class);
    }
}
