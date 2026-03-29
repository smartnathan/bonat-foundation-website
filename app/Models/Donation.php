<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'programme_type', 'give_type', 'frequency', 'amount',
    'payment_method', 'payment_type', 'payment_status',
    'payment_reference', 'payment_date',
    'donor_name', 'donor_email', 'donor_phone',
])]
class Donation extends Model
{
    use HasFactory;

    protected $casts = [
        'payment_date' => 'datetime',
        'amount' => 'decimal:2',
    ];
}
