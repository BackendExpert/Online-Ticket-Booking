@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicles') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2><i class="fas fa-shuttle-van"></i> Register New Vehicle</h2>
        <hr>
        <br><br>

        
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


        <form action="{{ url('/vehicles') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-4">
                    <label for="frant-img">Front of Vehicle (Image)</label>
                    <input type="file" name="frant_ing" id="frant_ing" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="back-img">Back of Vehicle (Image)</label>
                    <input type="file" name="back_ing" id="back_ing" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="left_ing">Left Side of Vehicle (Image)</label>
                    <input type="file" name="left_ing" id="left_ing" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="right_ing">Right Side of Vehicle (Image)</label>
                    <input type="file" name="right_ing" id="right_ing" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="in_ing">InSide of Vehicle (Image)</label>
                    <input type="file" name="in_ing" id="in_ing" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="owner">Vehicle Owner : </label>
                    <input type="text" class="form-control" value="@php echo Auth::user()->name; @endphp" disabled><br>
                    <input type="hidden" name="owner" value="@php echo Auth::user()->name; @endphp">
                </div>
                <div class="col-lg-6">
                    <label for="plateNo">Vehicle Plate Number : </label>
                    <input type="text" name="vehicle_plate_no" id="vehicle_plate_no" class="form-control">
                    (Must be between 10 and 11 characters)
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="regNo">Vehicle Registered Number : </label>
                    <input type="text" name="vehicle_registed_no" id="vehicle_registed_no" class="form-control">
                    (Must be between 12 and 15 characters)
                </div>
                <div class="col-lg-6">
                    <label for="chassisNo">Vehicle Chassis Number : </label>
                    <input type="text" name="vehicle_chassis_no" id="vehicle_chassis_no" class="form-control">
                    (Must be between 12 and 15 characters)
                </div>
            </div>            
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="vehiType">Vehicle Type : </label>
                    <input type="text" name="vehicle_type" id="vehicle_type" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="vehicle_model">Vehicle Model : </label>
                    <input type="text" name="vehicle_model" id="vehicle_model" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="vehicle_color"> Vehicle Color</label>
                    <input type="text" name="vehicle_color" id="vehicle_color" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="seats">Vehicle Seats</label>
                    <input type="number" name="seats" id="seats" class="form-control">
                    (have many seats the vehicle have)
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" value="Register Vehicle" class="btn btn-success" style="width: 100%;">
                </div>
            </div>

        </form>
    </div>
@endsection