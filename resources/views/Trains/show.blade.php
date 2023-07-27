@extends('layouts.dash')

@if (Auth::user()->role == 3)
<script>window.location = "/client";</script>
@endif

@section('content')
    <div class="admin-card">
        Train
    </div>
@endsection