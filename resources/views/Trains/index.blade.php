@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>Trains</h2>

        <a href="{{ url('Trains/create') }}"><button class="btn btn-success">Add Train</button></a>
    </div>
@endsection