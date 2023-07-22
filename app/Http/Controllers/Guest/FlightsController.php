<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function flights(){
        $flights = Flight::all();
        return view('guest.flight.index',compact('flights'));
    }
}
