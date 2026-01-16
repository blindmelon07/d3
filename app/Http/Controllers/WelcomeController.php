<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Event;
use App\Models\Gallery;

class WelcomeController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('start_date', '>=', now())
            ->orderBy('start_date', 'asc')
            ->limit(6)
            ->get();

        $advertisements = Advertisement::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        $galleries = Gallery::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('welcome', compact('upcomingEvents', 'advertisements', 'galleries'));
    }
}