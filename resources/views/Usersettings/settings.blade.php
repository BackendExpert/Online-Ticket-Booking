@extends('layouts.dash')

@if (Auth::user()->id != $member_setting->id)
    
@endif

@section('content')
    <div class="admim-card">
        <h2><i class="fa fa-gears"></i> Account Settings</h2>
    </div>
@endsection