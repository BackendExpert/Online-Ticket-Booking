@extends('layouts.dash')


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Client Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="admin-card">
        <h2>Client Dashboard</h2><hr>

        {{-- User Name : <b>@php  echo auth()->user()->name;   @endphp</b> <br>
        User Email : <b>@php  echo auth()->user()->email;   @endphp</b> --}}

        <div class="row">
            <div class="col-lg-3">
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Success card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
        </div>

    </div>

@endsection
