<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::where('available', true)
                            ->orderBy('category')
                            ->get()
                            ->groupBy('category');
        
        return view('menu.index', compact('menuItems'));
    }

    public function show(MenuItem $menuItem)
    {
        return view('menu.show', compact('menuItem'));
    }
}