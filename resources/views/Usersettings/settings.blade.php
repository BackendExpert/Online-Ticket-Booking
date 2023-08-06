@extends('layouts.dash')

@if (Auth::user()->id != $member_setting->id)
<script>window.location = "/";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fa fa-gears"></i> Account Settings</h3>
        <hr><br>

        <div class="row">
            <div class="col-lg-2">
                <h5>Name : </h5>
            </div>
            <div class="col-lg-10">
                <h6> {{ $member_setting->name }} </h6>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-2">
                <h5>Email : </h5>
            </div>
            <div class="col-lg-10">
                <h6> {{ $member_setting->email }} </h6>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-2">
                <h5>Member since : </h5>
            </div>
            <div class="col-lg-10">
                <h6> {{ $member_setting->created_at }} </h6>
            </div>
        </div>
        <hr>

        
    </div>

    <div class="admin-card">
        <h3><i class="fas fa-key"></i> Password Reset</h3>
        <hr><br>

        <a href="{{ url('password/'.Auth::user()->id) }}"><button class="btn btn-danger"><i class="fas fa-key"></i> Password Reset </button></a>

    </div>
@endsection