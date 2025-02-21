<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'columns',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
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

    public function columns(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
