<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function showHome()
    {
        return Inertia::render('LandingPage');
    }
}
