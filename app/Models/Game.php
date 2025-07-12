<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'genre',
        'min_players',
        'max_players',
        'age_range',
        'difficulty',
        'rental_price',
        'purchase_price',
        'stock_quantity',
        'available',
    ];

    protected $casts = [
        'rental_price' => 'decimal:2',
        'purchase_price' => 'decimal:2',
        'available' => 'boolean',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_games');
    }
}