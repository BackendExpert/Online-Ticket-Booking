@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        All Trains

        <a href="{{ url('Trains') }}"><button class="btn btn-primary">Back</button></a>

        <br>

        <form action="{{ url('Trains') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <label for="Train Name">Train Name</label><br>
                    <input type="text" name="train_name" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="Train Name">Departure Station</label><br>
                    <input type="text" name="departure_station" id="" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                    <label for="Train Name">Departure Time</label><br>
                    <input type="text" name="departure_time" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="Train Name">Arrival Station</label><br>
                    <input type="text" name="arrival_station" id="" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                    <label for="Train Name">Arrival Time</label><br>
                    <input type="text" name="arrival_time" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Monday">
                        <label class="form-check-label" for="Monday">
                            Monday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Tuesday">
                        <label class="form-check-label" for="Tuesday">
                            Tuesday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Wednesday">
                        <label class="form-check-label" for="Wednesday">
                            Wednesday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Thursday">
                        <label class="form-check-label" for="Thursday">
                            Thursday
                        </label>
                    </div><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Thursday">
                        <label class="form-check-label" for="Thursday">
                            Thursday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Thursday">
                        <label class="form-check-label" for="Thursday">
                            Thursday
                        </label>
                    </div><br>
                </div>
            </div>











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