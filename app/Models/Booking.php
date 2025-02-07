<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_number', 'salesman_id', 'sale_amount', 'gst', 'payment_mode', 'company_name', 'driver_name', 'convincer_name', 'guide_name', 'commission_amount', 'payment_status',
    ];

    protected $casts = [

    ];

    public function salesman(): BelongsTo
    {
        return $this->belongsTo(Salesman::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
