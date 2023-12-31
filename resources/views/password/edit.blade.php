@extends('layouts.dash')

@if (Auth::user()->id != $member_pass->id)
<script>window.location = "/";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-key"></i> Password Reset</h3>
        <hr>
        <a href="{{ url('/Usersettings/'.Auth::user()->id.'/settings'); }}"><button class="btn btn-primary">Back</button></a><br>
        
        <form action="{{ url('password/' .$member_pass->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <br>
            <div class="row">
                <div class="col-lg-2">
                    <label for="current_pass">Current Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="current_password" id="" class="form-control">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <label for="current_pass">New Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="new_pass" id="" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <label for="current_pass">Confirm New Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="cnew_pass" id="" class="form-control">
                </div>
            </div>
            <br>

            <input type="submit" value="Reset Password" class="btn btn-success">
            
        </form>

    </div>
@endsection