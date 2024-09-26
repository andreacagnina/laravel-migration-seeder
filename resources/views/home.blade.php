@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I treni Ciuff Ciuff🚊in partenza oggi</h1>
                <div class="row">
                    <div class="col-12">
                        @foreach ($trains as $train)
                            <ul>
                                @if ($train->departure_station != $train->arrival_station && $train->arrival_time > $train->departure_time)
                                    <li>
                                        <strong>Company:</strong> {{ $train->company }}<br>
                                        <strong>Stazione di Partenza:</strong> {{ $train->departure_station }}<br>
                                        <strong>Stazione di arrivo:</strong> {{ $train->arrival_station }}<br>
                                        <strong>Orario di partenza:</strong> {{ $train->departure_time }}<br>
                                        <strong>Orario di arrivo:</strong> {{ $train->arrival_time }}<br>
                                        <strong>Codice vettura:</strong> {{ $train->train_code }}<br>
                                        <strong>Numero carrozze:</strong> {{ $train->number_of_carriages }}<br>
                                        @if ($train->delay)
                                            <strong>IL TRENO è IN RITARDO, CI SCUSIAMO PER IL DISAGIO</strong><br>
                                        @endif

                                        @if ($train->suppressed)
                                            <strong>IL TRENO è STATO SOPPRESSO</strong>
                                        @endif
                                    </li>
                                @endif
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
