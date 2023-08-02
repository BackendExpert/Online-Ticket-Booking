@extends('layouts.dash')



@if (Auth::user()->role == 3)
    <script>
        window.location = "/client";
    </script>
@endif

@section('content')
    <div class="admin-card">
        All Trains

        <a href="{{ url('Trains') }}"><button class="btn btn-primary">Back</button></a>

        <br>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors : </strong> You got Following Errors while validation this form<br>
                        <b>{{ $error }}</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        @endif


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

            <div class="row">
                <label for="days"><b>Select Days</b></label> <br><br>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Monday" name="weekly_schedule[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="Monday">
                            Monday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tuesday" name="weekly_schedule[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="Tuesday">
                            Tuesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wednesday" name="weekly_schedule[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="Wednesday">
                            Wednesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Thursday" name="weekly_schedule[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="Thursday">
                            Thursday
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Friday" name="weekly_schedule[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="Friday">
                                Friday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saturday" name="weekly_schedule[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="Saturday">
                                Saturday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sunday" name="weekly_schedule[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="Sunday">
                                Sunday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div><br><br>
            <input type="hidden" name="is_active" value="1">

            <br>
            <hr><br>

            <div id="repeater">
                <b>Add Stations</b> <br><br>
                <div class="repeater-item">
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" name="station[]" placeholder="Station Name" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <input type="time" name="time_arrival[]" placeholder="Arrival Time" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <input type="time" name="time_departure[]" placeholder="Departure Time" class="form-control">
                        </div>
                    </div>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-sm btn-primary" id="add-btn">Add More Startions</button>

            <br><br>

            <input type="submit" value="Add Train" class="btn btn-success" style="width: 100%;">

        </form>
    </div>


@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Add new repeater item
    $('#add-btn').click(function() {
      var repeaterItem = 
        '<br>'+
        '<div class="repeater-item">' +
        '<div class="row">'+
        '<div class="col-lg-3">'+
        '<input type="text" name="station[]" placeholder="Enter data" class="form-control">' +
        '</div>'+
        '<div class="col-lg-3">'+
        '<input type="text" name="time_arrival[]" placeholder="Enter data" class="form-control">' +
        '</div>'+
        '<div class="col-lg-3">'+
        '<input type="text" name="time_departure[]" placeholder="Enter data" class="form-control">' +
        '</div>'+
        '<div class="col-lg-3">'+
        '<button type="button" class="btn btn-sm btn-danger remove-btn">Remove</button>' +
        '</div>'
        '</div>'+
        '</div>';

        
      $('#repeater').append(repeaterItem);
    });

    // Remove repeater item
    $(document).on('click', '.remove-btn', function() {
      $(this).closest('.repeater-item').remove();
    });
  });
</script>