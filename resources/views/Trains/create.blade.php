@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        All Trains

        <a href="{{ url('Trains') }}"><button class="btn btn-primary">Back</button></a>

        <br>

        <form action="{{ url('Trains') }}" method="POST">
            @csrf

            <label for="Train Name">Train Name</label><br>
            <input type="text" name="train_name" id="" class="form-control">

            <label for="Train Name">departure_station</label><br>
            <input type="text" name="departure_station" id="" class="form-control">

            <label for="Train Name">departure_time</label><br>
            <input type="text" name="departure_time" id="" class="form-control">

            <label for="Train Name">arrival_station</label><br>
            <input type="text" name="arrival_station" id="" class="form-control">

            <label for="Train Name">arrival_time</label><br>
            <input type="text" name="arrival_time" id="" class="form-control">

            <label for="Train Name">weekly_schedule</label><br>
            <input type="text" name="weekly_schedule" id="" class="form-control">

            <label for="Train Name">stops</label><br>
            <input type="text" name="stops" id="" class="form-control">

            <label for="Train Name">is_active</label><br>
            <input type="number" name="is_active" id="" class="form-control">

            <label for="Train Name">station</label><br>
            <input type="text" name="station" id="" class="form-control">

            
            <label for="Train Name">time_arrival</label><br>
            <input type="text" name="time_arrival" id="" class="form-control">

            
            <label for="Train Name">time_departure</label><br>
            <input type="text" name="time_departure" id="" class="form-control">

            <input type="submit" value="Add" class="btn btn-success">
        </form>
    </div>
@endsection