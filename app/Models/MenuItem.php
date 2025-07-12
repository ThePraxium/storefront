<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
        'price',
        'allergens',
        'available',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'allergens' => 'array',
        'available' => 'boolean',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_menu_items')
                    ->withPivot('quantity');
    }
}