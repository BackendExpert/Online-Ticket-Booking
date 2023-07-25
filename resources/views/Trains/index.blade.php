@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        All Trains

        <a href="{{ url('Trains/create') }}"><button class="btn btn-success">Add Train</button></a>
    </div>
@endsection