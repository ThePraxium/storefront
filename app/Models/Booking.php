<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'table_id',
        'date',
        'start_time',
        'end_time',
        'table_cost',
        'food_cost',
        'total_amount',
        'status',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'table_cost' => 'decimal:2',
        'food_cost' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'booking_games');
    }

    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'booking_menu_items')
                    ->withPivot('quantity');
    }
}