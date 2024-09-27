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
                                @if ($train->departure_station != $train->arrival_station)
                                    <li>
                                        <strong>Company:</strong> {{ $train->company }}<br>
                                        <strong>Stazione di Partenza:</strong> {{ $train->departure_station }}<br>
                                        <strong>Stazione di arrivo:</strong> {{ $train->arrival_station }}<br>
                                        <strong>Orario di partenza:</strong>
                                        {{ !$train->suppressed ? $train->departure_time : 'IL TRENO è STATO SOPPRESSO' }}<br>
                                        <strong>Orario di arrivo:</strong>
                                        {{ !$train->suppressed ? $train->arrival_time : 'IL TRENO è STATO SOPPRESSO' }}<br>
                                        <strong>Codice vettura:</strong> {{ $train->train_code }}<br>
                                        <strong>Numero carrozze:</strong> {{ $train->number_of_carriages }}<br>
                                        <strong>{{ !$train->suppressed ? ($train->delay ? 'IL TRENO è IN RITARDO, CI SCUSIAMO PER IL DISAGIO' : '') : 'IL TRENO è STATO SOPPRESSO' }}</strong>
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
