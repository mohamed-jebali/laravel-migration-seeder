<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('guest.train.index',compact('trains'));
    }
}
