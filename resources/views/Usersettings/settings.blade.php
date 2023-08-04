@extends('layouts.dash')

@if (Auth::user()->id != $member_setting->id)
<script>window.location = "/";</script>
@endif

@section('content')
    <div class="admin-card">
        <h2><i class="fa fa-gears"></i> Account Settings</h2>
    </div>
@endsection