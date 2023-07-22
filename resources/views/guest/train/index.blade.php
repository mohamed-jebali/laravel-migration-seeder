@extends('layouts.app')

@section('title', 'Trains')

@section('main-content')
<div class="container mx-auto">
    <div class="row">
         @foreach ($trains as $train)
        <div class="col-4 mb-3">
            <div class="card">
               <div class="card-body bg-secondary text-white">
               <h5 class="card-title"> <strong> Company: </strong>{{$train->company}}</h5>
               <p class="card-text"><strong>Departure Station: </strong>{{$train->departure_station}}</p>
               <p class="card-text"><strong>Arrival Station: </strong>{{$train->arrival_station}}</p>
               <p class="card-text"><strong>Arrival Time: </strong>{{$train->arrival_time}}</p>
               <p class="card-text"><strong>Departure Time :</strong>{{$train->departure_time}}</p>
               <p class="card-text"><strong>Number Carriage :</strong>{{$train->train_number_carriage}}</p>
               <p class="card-text"><strong>In Time :</strong>{{$train->in_time}}</p>
               <p class="card-text"><strong>Cancelled :</strong>{{$train->cancelled}}</p>
             </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
