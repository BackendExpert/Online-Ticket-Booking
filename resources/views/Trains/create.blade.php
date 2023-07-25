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
                    <input type="time" name="departure_time" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="Train Name">Arrival Station</label><br>
                    <input type="text" name="arrival_station" id="" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                    <label for="Train Name">Arrival Time</label><br>
                    <input type="time" name="arrival_time" id="" class="form-control"><br>
                </div>
            </div>

            <label for="weekly_schedule">Weekly Schedule</label>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Monday" id="Monday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Monday">
                            Monday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tuesday" id="Tuesday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Tuesday">
                            Tuesday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wednesday" id="Wednesday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Wednesday">
                            Wednesday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Thursday" id="Thursday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Thursday">
                            Thursday
                        </label>
                    </div><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Friday" id="Friday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Friday">
                            Friday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Saturday" id="Saturday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Saturday">
                            Saturday
                        </label>
                    </div><br>
                </div>
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Sunday" id="Sunday" name="weekly_schedule[]">
                        <label class="form-check-label" for="Sunday">
                            Sunday
                        </label>
                    </div><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="Train Name">Train Stops</label><br>
                    <input type="text" name="stops" id="" class="form-control">
                    <input type="hidden" name="is_active" value="1">
                </div>
            </div>
            <br>
            <hr><br>

            <div class="row">
                <div class="col-lg-4">
                    <label for="Train Name">Station</label><br>
                    <input type="text" name="station" id="" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="Train Name">Arrival At</label><br>
                    <input type="text" name="time_arrival" id="" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="Train Name">Departure At</label><br>
                    <input type="text" name="time_departure" id="" class="form-control">
                </div>
            </div>



            


            


            <input type="submit" value="Add" class="btn btn-success">
        </form>
    </div>
@endsection