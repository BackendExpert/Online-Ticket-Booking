@extends('layouts.dash')


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

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


        {{-- <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-user-tie icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Admins</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
          </div>
        </div>

        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-chalkboard-teacher icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Staff</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
          </div>
        </div>


        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-users icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Clients</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
            </div>
        </div> --}}

        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4">
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
                </div>
                <div class="col-lg-4">
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
                </div>
                <div class="col-lg-4">
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
                </div>
            </div>

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
