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

            <div class="row">
                <div class="col-lg-2">
                    <label for="current_pass">Current Password : </label>
                </div>
                <div class="col-lg-10"></div>
            </div>
            
        </form>

    </div>
@endsection