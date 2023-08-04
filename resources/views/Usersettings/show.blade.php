@extends('layouts.dash')

@if (Auth::user()->id != $member_settings->id)
<script>window.location = "/users";</script> 
@endif

@section('content')
    <div class="admin-card">
        <h2>Account Settings</h2>
        <hr><br>
    </div>
@endsection