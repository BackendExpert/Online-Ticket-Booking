@include('header')

<style>
    .home-content{
        background-image: url('https://wallpaperaccess.com/full/1461752.jpg');
        height: 80vh;
        color: white;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main-title{
        font-size: 30px;
        text-align: center;
        padding-top: 250px;
    }
</style>

<body class="antialiased">
    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="main-content">
                    <div class="container text-center main-btns">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3 btn-login">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                                @else
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>
                                </div>
                                @endauth
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            @endif             --}}

            <div class="home-content">
                <div class="main-title">
                    Online Train Ticket Booking
                </div>
            </div>
    
</body>

@include('layouts.footer')

</html>
