<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config('app.name', 'Digital Trends') }}</title>
    <!--DIGITAL TREND

    https://templatemo.com/tm-538-digital-trend

    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-digital-trend.css') }}">

</head>

<body>
    <div id="app">
        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <i class="fa fa-line-chart"></i>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        @if(Route::is('home'))
                        <li class="nav-item">
                            <a href="#about" class="nav-link smoothScroll">Studio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#project" class="nav-link smoothScroll">Our Works</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('goods')}}" class="nav-link goods">Goods</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('customer')}}" class="nav-link customer">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee')}}" class="nav-link employee">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('supplier')}}" class="nav-link supplier">Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link contact">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="{{!Route::is('home') ? 'py-4' : ''}}">
            @yield('content')
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="my-4">Contact Info</h4>

                        <p class="mb-1">
                            <i class="fa fa-phone mr-2 footer-icon"></i>
                            +99 080 070 4224
                        </p>

                        <p>
                            <a href="#">
                                <i class="fa fa-envelope mr-2 footer-icon"></i>
                                hello@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="my-4">Our Studio</h4>

                        <p class="mb-1">
                            <i class="fa fa-home mr-2 footer-icon"></i>
                            Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
                        </p>
                    </div>

                    <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                        <p class="copyright-text">Copyright &copy; 2020 Your Company
                            <br>
                            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a>
                        </p>
                    </div>

                    <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                        <ul class="footer-link">
                            <li><a href="#">Stories</a></li>
                            <li><a href="#">Work with us</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>


        <!-- SCRIPTS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>