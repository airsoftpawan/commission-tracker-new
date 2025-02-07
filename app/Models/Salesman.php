<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salesman extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'commission_rate',
    ];

    protected $casts = [

    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
