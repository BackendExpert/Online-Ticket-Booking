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

            <div class="row"></div>
        </form>

    </div>
@endsection