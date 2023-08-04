@extends('layouts.dash')

@if (Auth::user()->id != $member_setting->id)
<script>window.location = "/";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fa fa-gears"></i> Account Settings</h3>
        <hr><br>
    </div>
@endsection