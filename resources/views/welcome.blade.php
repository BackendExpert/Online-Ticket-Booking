@include('header')

<style>
    .home-content {
        background-image: url(https://wallpapercave.com/dwp1x/wp8825456.jpg);
        height: 80vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 200px 0;
        text-align: center;
        color: white;
    }

    .section-1 {
        padding: 0;
    }

    .box {
        border: none;
        border-radius: 5px;
        width: 100%;
        padding: 20px 70px 20px 40px;
        margin: 50px 0;
    }

    .green {
        background-color: green;
    }

    .blue {
        background: rgb(64, 64, 248);
        color: white;
    }

    .orange {
        background: orange;
    }

    .content-title {
        font-size: 30px;
        font-weight: 500;
    }

    .latest-update {
        background: orange;
    }

    .features {
        background: green;
        margin-right: -110px;
    }

    .content2-title {
        font-size: 35px;
        font-weight: 500;
        padding: 35px 20px;
    }

    .conetent2-body {
        padding: 40px 20px;
    }

    .btn-login, .add-vehi {
        margin-top: 20px;
        padding: 15px 35px;
        border: 2px solid orange;
        border-radius: 5px;
        background: transparent;
        color: orange;
        transition: 0.5s;
        font-size: 20px;
    }

    .btn-login:hover {
        cursor: pointer;
        color: black;
        background: orange;
        padding: 20px 40px;
    }

    .content2 {
        padding-right: 12px;
        padding-left: 12px;
        margin-right: auto;
        margin-left: auto;
    }
    .add-vehi{
        background: orange;
        color: black;
        font-weight: 500;
    }
    .add-vehi:hover{
        background: transparent;
        color: orange;
        padding: 20px 40px;
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
        <div class="container">
            @auth
                <h1>Welcome Back</h1>
                <a href="{{ url('admin') }}"><button class="btn-login">Dashboard</button></a>
                <a href=""><button class="add-vehi">Register New Vehicle</button></a>
            @else
                <h1>Welcome to Vehicle Registration</h1>
                <a href="{{ route('login') }}"><button class="btn-login">Loging Here</button></a>
            @endauth
        </div>
    </div>

    <div class="content-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box green">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="content-title">Owners</span>
                            </div>
                            <div class="col-lg-2">
                                <span style="font-size: 30px">55</span>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2">
                                <i class="fas fa-users" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box blue">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="content-title">Vehicle</span>
                            </div>
                            <div class="col-lg-2">
                                <span style="font-size: 30px">55</span>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2">
                                <i class="fas fa-shuttle-van" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box orange">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="content-title">VIews</span>
                            </div>
                            <div class="col-lg-2">
                                <span style="font-size: 30px">55</span>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2">
                                <i class="fas fa-eye" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content2">
        <div class="row">
            <div class="col-lg-6 latest-update">
                <div class="content2-title">
                    Latest Update
                </div>
                <div class="conetent2-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem numquam laboriosam assumenda saepe
                    officia? Facere, dolor corporis porro consectetur illum quidem fuga a minima aliquam laborum ad
                    soluta nulla saepe!
                    Blanditiis eaque placeat quisquam vero veritatis assumenda quasi culpa deserunt quam voluptas, fuga
                    doloribus doloremque voluptatibus ab quo, perspiciatis necessitatibus perferendis? Totam quia eos at
                    repellat quis cumque reprehenderit minus.
                    Nisi numquam dignissimos libero vero rerum, quo, perferendis quod culpa voluptatum voluptate
                    veritatis! Repellendus, quibusdam cum consequuntur nam quas id laborum vitae molestias sint ducimus
                    maxime incidunt dolore, odit libero?
                    Perferendis distinctio, vitae, pariatur suscipit necessitatibus consectetur exercitationem facilis
                    assumenda odit neque non illum debitis. Ratione exercitationem aspernatur voluptas at quisquam odio
                    aut consequuntur dolor enim. Nemo molestias cum quas?
                    Necessitatibus ipsa, cum quibusdam molestias est architecto totam? Maxime consequatur illo molestias
                    nobis! Nobis dolor sed reiciendis. Accusamus sit temporibus officia quidem alias praesentium,
                    quibusdam eaque ducimus pariatur asperiores iste.
                </div>
            </div>
            <div class="col-lg-6 features">
                <div class="content2-title">
                    Latest Update
                </div>
                <div class="conetent2-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, minima necessitatibus accusantium
                    impedit eum dolor magnam eos recusandae dolores deleniti ea est et nisi consectetur. Numquam
                    incidunt error reiciendis suscipit.
                    Perspiciatis, quaerat. Unde maxime saepe, fuga facere laboriosam aspernatur eaque totam expedita
                    ipsam dicta rem voluptatum adipisci dolorem quo excepturi consequuntur obcaecati quidem possimus
                    quaerat ut pariatur quod. Provident, ullam!
                    Fugit commodi nobis, ad cumque exercitationem ut delectus id consequatur deleniti excepturi.
                    Praesentium labore et architecto quidem esse iste nostrum sunt saepe ipsum a expedita, iusto
                    dignissimos omnis ratione cumque.
                    Aliquam adipisci neque repudiandae expedita doloribus! Obcaecati earum, quod odio nihil aspernatur
                    itaque amet a dignissimos eveniet, odit officiis quae, expedita in voluptate fuga reprehenderit
                    tenetur animi qui. Voluptas, assumenda!
                    Enim quasi totam, molestias provident sunt sit, ex ad, id eligendi quibusdam dicta aperiam magni.
                    Natus esse perferendis, velit voluptates, autem officia impedit earum iusto odit vero quasi sint
                    voluptate?
                </div>
            </div>
        </div>

    </div>

</body>

@include('layouts.footer')

</html>
