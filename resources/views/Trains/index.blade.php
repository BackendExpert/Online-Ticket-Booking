@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>Trains</h2>
        <hr><br>
        <a href="{{ url('Trains/create') }}"><button class="btn btn-success"><i class="fas fa-train"></i> Add Train</button></a>

<br>

        @foreach ($train as $tra)
            {{ $tra->train_name }} <br>
            {{-- <p style="color: red;"> {{ $train->train_stops_all->time_arrival }} </p> --}}

            @foreach ($trainStops as $stop)
                <p style="color:red;">{{ $stop->station }}</p>
            @endforeach

        @endforeach

    </div>
@endsection