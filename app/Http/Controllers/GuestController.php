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

    public function lepasKunci()
    {
        // Get all cars with lepas kunci service, ordered by price
        $cars = Car::where('status', 'available')
            ->orderBy('lepas_kunci_price', 'asc')
            ->get();

        // Get a featured car for the hero section if needed
        $featuredCar = $cars->first();

        return view('pages.guest.services.lepas-kunci', [
            'cars' => $cars,
            'featuredCar' => $featuredCar
        ]);
    }

    public function carterDalam()
    {
        $cars = Car::all();
        return view('pages.guest.services.carter-dalam', compact('cars'));
    }

    public function carterLuar()
    {
        $cars = Car::all();
        return view('pages.guest.services.carter-luar', compact('cars'));
    }

    public function regular()
    {
        $cars = Car::all();
        return view('pages.guest.services.regular', compact('cars'));
    }

    public function contact()
    {
        return view('pages.guest.contact');
    }

    public function cars()
    {
        return view('pages.guest.cars');
    }
}
