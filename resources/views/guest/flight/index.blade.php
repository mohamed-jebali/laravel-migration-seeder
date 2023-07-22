@extends('layouts.app')

@section('title', 'Flights')

@section('main-content')
<div class="container mx-auto">
    <div class="row">
         @foreach ($flights as $flight)
        <div class="col-4 mb-3">
            <div class="card">
               <div class="card-body bg-primary text-white">
               <h5 class="card-title"> <strong> Aircraft Name: </strong>{{$flight->aircraft_name}}</h5>
               <p class="card-text"><strong>Departure Airport: </strong>{{$flight->departure_airport}}</p>
               <p class="card-text"><strong>Arrival Airport: </strong>{{$flight->arrival_airport}}</p>
               <p class="card-text"><strong>Terminal :</strong>{{$flight->terminal}}</p>
               <p class="card-text"><strong>Delay :</strong>{{$flight->delay}}</p>
               <p class="card-text"><strong>Check in :</strong>{{$flight->check_in}}</p>
               <p class="card-text"><strong>Flight Number :</strong>{{$flight->flight_number}}</p>
             </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection