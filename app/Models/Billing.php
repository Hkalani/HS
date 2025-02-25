<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Billing extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'patient_id' => 'integer',
        'service_id' => 'integer',
        'price' => 'decimal',
        'medicare_flag' => 'boolean',
        'hmo_flag' => 'boolean',
        'amount_due' => 'decimal',
        'insurance_covered' => 'boolean',
        'i_c_d9_code_id' => 'integer',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function iCD9Code(): BelongsTo
    {
        return $this->belongsTo(ICD9Code::class);
    }
}
