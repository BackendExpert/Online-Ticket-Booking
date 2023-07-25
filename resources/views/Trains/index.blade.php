@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>Trains</h2>
        <hr><br>
        <a href="{{ url('Trains/create') }}"><button class="btn btn-success"><i class="fas fa-train"></i> Add Train</button></a>

<br>

        @foreach ($all_trains as $train)
            {{ $train->train_name }} <br>
        @endforeach

    </div>
@endsection