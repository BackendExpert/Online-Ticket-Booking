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
                    <div class="card-header">My Tickets</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 50px;"><i class="fa fa-ticket"></i></p>
                            </div>
                            <div class="col-lg-6">
                                <p style="font-size: 25px;">50</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Last Re-Charge</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 50px;"><i class="fas fa-dollar-sign"></i></p>
                            </div>
                            <div class="col-lg-6">
                                <p style="font-size: 25px;">1500.00</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Payments</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 50px;"><i class="fas fa-money-bill-wave"></i></p>
                            </div>
                            <div class="col-lg-6">
                                <p style="font-size: 25px;">50</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">My Balance</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 50px;"><i class="fas fa-dollar-sign"></i></p>
                            </div>
                            <div class="col-lg-6">
                                <p style="font-size: 25px;">5000.00</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
