<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\MenuItem;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $featuredGames = Game::where('available', true)->take(6)->get();
        $featuredMenuItems = MenuItem::where('available', true)->take(4)->get();
        $upcomingEvents = Event::where('active', true)
                              ->where('date', '>=', now())
                              ->orderBy('date')
                              ->take(3)
                              ->get();
        
        return view('home', compact('featuredGames', 'featuredMenuItems', 'upcomingEvents'));
    }
}