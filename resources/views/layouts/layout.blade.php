<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Wonde - универсальный бизнес шаблон сайта</title>

    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.carousel-main.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/portfolio-blog-slider-settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.carousel-content.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home-slider-settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/carousel-portfolio-settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/carousel-blog-settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/carousel-testimonials-settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/carousel-clients-settings.js')}}"></script>
</head>

<body class="light-bg home">
<div class="main-container">

    @section('topbar')
        <div class="topbar-outer dark">
            <div class="topbar content-width">
                <div class="table fullheight">
                    <div class="table-cell fullheight middle">
                        <div class="logo">
                            <a href="/"><img alt="" src="images\topbar\logo_white.png" height="17">
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="topsocial">
                    <li><a href="https://www.linkedin.com/in/igor-breusov-032441135/"><i
                                    class="fa fa-linkedin-square"></i>
                            <div class="tooltip">LinkedIn</div>
                        </a>
                    </li>
                    <li><a href="https://www.facebook.com/bruce18021993"><i class="fa fa-facebook"></i>
                            <div class="tooltip">Facebook</div>
                        </a>
                    </li>
                    <li><a href="https://twitter.com/bruce18021993"><i class="fa fa-twitter"></i>
                            <div class="tooltip">Twitter</div>
                        </a>
                    </li>
                    <li><a href="https://plus.google.com/u/0/100793117405853628080"><i class="fa fa-google-plus"></i>
                            <div class="tooltip">Google+</div>
                        </a>
                    </li>
                </ul>

                <ul class="topnav">
                    <li><a href="/" class="current">Главная</a>
                    </li>
                    <li><a href="/about">О компании</a>
                    </li>
                    <li><a href="/projects">Проекты</a>
                    </li>
                    <li><a href="/news">Новости</a>
                    </li>
                    <li><a href="/contact">Контакты</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" href="#" role="button">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">&nbsp
                                {{ __('Выход') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>

                <a href="#" class="mobilenav-click">
                    <div class="mobilenav-button-container">
                        <div class="mobilenav-button-inner">
                            <div class="mobilenav-button"></div>
                        </div>
                    </div>
                </a>

                <div class="mobilenav-container">
                    <ul class="mobilenav">
                    </ul>
                </div>
            </div>
        </div>
    @show

    @section('homebanner')

    @endsection

    @section('homebar')

    @endsection

    @yield('maincontent')

    @section('footer')
        <div class="footer-container">

            <div class="spacer"></div>

            <div class="content-width">
                <div class="client-logos-container">

                    <div class="client-logos-title">
                        <span>Наши партнеры</span>
                    </div>

                    <div id="clients-back"></div>
                    <div id="clients-next"></div>

                    <div class="carousel">
                        <ul id="clients-carousel" class="column-container">

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo1.png">
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo2.png">
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo3.png">
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo4.png">
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo5.png">
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="logo-outer">
                                    <div class="logo-inner">
                                        <!-- Actual Logo -->
                                        <img alt="" src="images\client-logos\logo6.png">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-infobar">
                <div class="content-width">
                    <!-- Text -->
                    Мы предоставляем только проверенную информацию. Все права защищены.
                </div>
            </div>

            <div class="footer">
                <div class="content-width">


                    <!-- Four Columns -->

                    <div class="column-container">
                        @foreach ($randomNews as $item)
                        <div class="column-one-fourth">
                            <img alt="" src="images\topbar\logo_white.png" height="17" width="57" class="logo">
                            <p>{{$item->news_content}}</p>
                            <p><a href="/news-post/{{$item->id}}">Читать далее</a>
                            </p>
                        </div>
                        @endforeach
                        <div class="column-one-fourth">
                            <h3>Галерея</h3>
                            <div class="footer-flickr-container">
                                <script type="text/javascript" src="{{asset('js/flickr.js')}}"></script>
                            </div>
                        </div>
                        <div class="column-one-fourth">

                            <h3>Ждем Вас</h3>

                            <ul class="footer-social">
                                <li>
                                    <a href="#"><i class="fa fa-linkedin-square"></i>
                                        <div class="tooltip">LinkedIn</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i>
                                        <div class="tooltip">Facebook</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i>
                                        <div class="tooltip">Twitter</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i>
                                        <div class="tooltip">Google+</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i>
                                        <div class="tooltip">YouTube</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i>
                                        <div class="tooltip">Pinterest</div>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="footer-lower-container">

                        <ul class="footer-lower">
                            <li><a href="/">Главная</a>
                            </li>
                            <li><a href="/about">О нас</a>
                            </li>
                            <li><a href="/projects">Проекты</a>
                            </li>
                            <li><a href="/news">Новости</a>
                            </li>
                            <li><a href="/contact">Контакты</a>
                            </li>
                        </ul>

                        <div class="footer-copyright">
                            &copy; 2016 | Wonde - универсальный бизнес шаблон сайта
                        </div>

                    </div>

                    <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>

                </div>
            </div>

        </div>
    @show

</div>

</body>

</html>