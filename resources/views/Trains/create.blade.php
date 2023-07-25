@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        All Trains

        <a href="{{ url('Trains') }}"><button class="btn btn-primary">Back</button></a>

        <br>

        <form action="{{ url('Trains') }}" method="POST">
            @csrf

            
        </form>
    </div>
@endsection