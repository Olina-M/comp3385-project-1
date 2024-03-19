<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Property;

class DashboardController extends Controller
{
    public function index(): View
    {
        $properties = Property::all();
        return view('dashboard',['properties' => $properties]);
    }
}