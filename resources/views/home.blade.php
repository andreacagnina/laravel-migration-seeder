@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I treni Ciuff Ciuff 🚊</h1>
                <div class="row">
                    <div class="col-12">
                        @foreach ($trains as $train)
                            <ul>
                                <li>
                                    {{ $train->company }},
                                    {{ $train->departure_station }},
                                    {{ $train->arrival_station }},
                                    {{ $train->departure_time }},
                                    {{ $train->arrival_time }},
                                    {{ $train->train_code }},
                                    {{ $train->number_of_carriages }},
                                    {{ $train->delay }},
                                    {{ $train->suppressed }},
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
