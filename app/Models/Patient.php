<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'dob' => 'date',
        'user_id' => 'integer',
        'insurance_type_id' => 'integer',
        'membership_type_id' => 'integer',
        'membership_start_date' => 'date',
        'membership_end_date' => 'date',
        'membership_status_id' => 'integer',
        'sex_id' => 'integer',
        'member_status_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sex(): BelongsTo
    {
        return $this->belongsTo(Sex::class);
    }

    public function insuranceType(): BelongsTo
    {
        return $this->belongsTo(InsuranceType::class);
    }

    public function membershipType(): BelongsTo
    {
        return $this->belongsTo(MembershipType::class);
    }

    public function memberStatus(): BelongsTo
    {
        return $this->belongsTo(MemberStatus::class);
    }

    public function billings(): HasMany
    {
        return $this->hasMany(Billing::class);
    }

    public function progressNotes(): HasMany
    {
        return $this->hasMany(ProgressNote::class);
    }

    public function exerciseRecordCharts(): HasMany
    {
        return $this->hasMany(ExerciseRecordChart::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }

    public function authorizationForms(): HasMany
    {
        return $this->hasMany(AuthorizationForm::class);
    }

    public function yearlyBillingTotals(): HasMany
    {
        return $this->hasMany(YearlyBillingTotal::class);
    }
}
