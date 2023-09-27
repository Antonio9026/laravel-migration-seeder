@extends('layouts.public')

@section('content')
    <div class="container">
        @foreach ($trains as $train)
            <div class="card-left">
                <p>{{ $train->azienda }}</p>
                <p>{{ $train->stazione_di_partenza }}</p>
                <p>{{ $train->orario_di_partenza }}</p>
                <p>{{ $train->orario_di_arrivo }}</p>
                <p>{{ $train->codice_treno}}</p>
                <p>{{ $train->numero_carrozze }}</p>
            </div>
        @endforeach
    </div>
