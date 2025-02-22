<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'membership_start_date' => 'date',
        'membership_end_date' => 'date',
    ];

    public function authorizationForms(): BelongsToMany
    {
        return $this->belongsToMany(AuthorizationForm::class);
    }

    public function yearlyBillingTotals(): BelongsToMany
    {
        return $this->belongsToMany(YearlyBillingTotal::class);
    }

    public function patientBillings(): BelongsToMany
    {
        return $this->belongsToMany(PatientBilling::class);
    }

    public function progressNotes(): BelongsToMany
    {
        return $this->belongsToMany(ProgressNote::class);
    }

    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class);
    }

    public function rides(): BelongsToMany
    {
        return $this->belongsToMany(Ride::class);
    }
}
