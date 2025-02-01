<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Service;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        $services = Service::all();
        return view('pages.guest.home', compact('cars', 'services'));
    }
}
