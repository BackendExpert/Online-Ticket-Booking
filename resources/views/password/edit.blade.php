@extends('layouts.dash')

@if (Auth::user()->id != $member_setting->id)
<script>window.location = "/";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-key"></i> Password Reset</h3>
        <hr>
        <a href="{{ url('/Usersettings/'.Auth::user()->id.'/settings'); }}"><button class="btn btn-primary">Back</button></a><br>
        
    </div>
@endsection