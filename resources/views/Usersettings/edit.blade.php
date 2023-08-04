@extends('layouts.dash')

@if (Auth::user()->id != $member_settings->id)
<script>window.location = "/";</script> 
@endif

@section('content')
    <div class="admin-card">
        <h2>Account Settings</h2>
        <hr><br>

        <h4>Change Password</h4>
        <br>

        <form action="{{ url('Usersettings/'.$member_settings->id.'/edit') }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="row">
                <div class="col-lg-2">
                    <label for="old_pass">Current Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="" id="" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-2">
                    <label for="new_pass">New Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="" id="" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-2">
                    <label for="confram_new">Current Password : </label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="" id="" class="form-control">
                </div>
            </div>
            <br><br>

            <input type="submit" value="Reset Password" class="btn btn-danger">
        </form>

    </div>
@endsection