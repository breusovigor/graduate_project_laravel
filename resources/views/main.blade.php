@extends('layouts.layout')

@section('homebanner')
    <div class="home-banner dark">

        <ul class="slider-container" id="home-slider">
            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-1">
                            <!-- Title -->
                            <h1>Бесплатный шаблон <span>HTML5</span> с адаптивным дизайном<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-2">
                            <div class="icon-container">
                                <!-- Icon Backing -->
                                <div class="icon-backing">
                                    <!-- Icon -->
                                    <i class="fa fa-css3"></i>
                                </div>
                            </div>
                            <!-- Title -->
                            <h1>Современный шбалон сайта<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-1">
                            <!-- Title -->
                            <h1>Бесплатный шаблон <span>HTML5</span> с адаптивным дизайном<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

        </ul>

        <div class="slider-nav-container">
            <div class="slider-nav-inner">
                <div class="slider-nav content-width">

                    <ul id="bx-pager">
                        <li><a data-slide-index="0" href="">Вступление</a>
                        </li>
                        <li><a data-slide-index="1" href="">Описание</a>
                        </li>
                        <li><a data-slide-index="2" href="">Предложения</a>
                        </li>
                    </ul>

                    <div class="slider-controls">
                        <div id="slider-pause"></div>
                        <div id="slider-prev"></div>
                        <div id="slider-next"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@show

@section('homebar')
    <div class="home-cta-bar-container accent">

        <div class="content-width">
            <div class="home-cta-bar">
                <!-- Text -->
                <div class="text">
                    Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.
                </div>
                <!-- Button -->
                <div class="home-cta-bar-button">
                    <a class="button transparent" href="#"><i class="fa fa-shopping-cart"></i>Подробнее</a>
                </div>
            </div>
        </div>

    </div>
@show

@section('maincontent')
    <div class="main-content">
        <div class="main-content-inner content-width">

            <div class="column-container">

                <div class="column-one-third">
                    <div class="icons-column">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #916C6C;">
                            <!-- Icon -->
                            <i class="fa fa-heart"></i>
                        </div>
                    </div>
                    <div class="content-column">
                        <!-- Title -->
                        <h3>Дизайн</h3>
                        <!-- Text -->
                        <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
                    </div>
                </div>

                <div class="column-one-third">
                    <div class="icons-column">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #7089AD;">
                            <!-- Icon -->
                            <i class="fa fa-font"></i>
                        </div>
                    </div>
                    <div class="content-column">
                        <!-- Title -->
                        <h3>Верстка</h3>
                        <!-- Text -->
                        <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
                    </div>
                </div>

                <div class="column-one-third">
                    <div class="icons-column">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #63885F;">
                            <!-- Icon -->
                            <i class="fa fa-fullscreen"></i>
                        </div>
                    </div>
                    <div class="content-column">
                        <!-- Title -->
                        <h3>Разработка</h3>
                        <!-- Text -->
                        <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
                    </div>
                </div>

            </div>

            <div class="divider"></div>

            <h3 class="section-title">Последние события</h3>

            <div id="portfolio-nav" class="carousel-nav">
                <div class="back"></div>
                <div class="next"></div>
            </div>

            <div class="carousel">
                <ul id="portfolio-carousel" class="slider-container">

                    <!-- One Fourth -->
                    @foreach($news as $item)
                    <li class="column-one-fourth portfolio-item branding">
                        <!-- Image -->
                        <a href="#" class="image-link"><img alt="" src="{{$item->news_preview}}"
                                                            class="fullwidth">
                        </a>
                        <!-- Title -->
                        <h3><a href="#">{{$item->news_title}}</a></h3>
                        <!-- Tags -->
                        <div class="tags">Категория</div>
                    </li>
                    @endforeach

                    <!-- END One Fourth -->

                </ul>
            </div>

            <div class="column-container">
                <div class="column-three-qtr">
                    <div class="divider"></div>
                    <h3 class="section-title">Последние новости</h3>
                    <div id="blog-nav" class="carousel-nav">
                        <div class="back"></div>
                        <div class="next"></div>
                    </div>
                    <div class="carousel">
                        <ul id="blog-carousel" class="slider-container">

                            <!-- One Fourth -->

                            <li class="column-one-fourth">
                                <!-- Image -->
                                <a href="blog-post.html" class="image-link"><img alt=""
                                                                                 src="images\placeholders\preview9.jpg"
                                                                                 class="fullwidth">
                                </a>
                                <!-- Title -->
                                <h3><a href="blog-post.html">Заголовок новости на сайте</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                                <!-- Excerpt -->
                                <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
                                <!-- Read More Link -->
                                <a href="blog-post.html">Подробнее</a>
                            </li>

                            <!-- END One Fourth -->

                        </ul>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <div class="divider"></div>
                    <h3 class="section-title">Комментарии</h3>
                    <div id="testimonials-nav" class="carousel-nav">
                        <div class="back"></div>
                        <div class="next"></div>
                    </div>
                    <div class="carousel">
                        <ul id="testimonials-carousel" class="slider-container">

                            <!-- Testimonial 1 -->
                            <li class="column-one-fourth">
                                <!-- Text -->
                                <div class="testimonial-text">
                                    <p>Тактика выстраивания отношений с коммерсчекими агентами стремительно
                                        развивает
                                        стратегический нестандартный подход.</p>
                                </div>
                                <!-- Name -->
                                <div class="testimonial-name">
                                    Джон Доу
                                </div>
                                <!-- Company URL -->
                                <div class="testimonial-link">
                                    <a href="#">Посетитель</a>
                                </div>
                            </li>
                            <!-- END Testimonial 1 -->

                            <!-- Testimonial 2 -->
                            <li class="column-one-fourth">
                                <!-- Text -->
                                <div class="testimonial-text">
                                    <p>Тактика выстраивания отношений с коммерсчекими агентами стремительно
                                        развивает
                                        стратегический нестандартный подход.</p>
                                </div>
                                <!-- Name -->
                                <div class="testimonial-name">
                                    Джон Доу
                                </div>
                                <!-- Company URL -->
                                <div class="testimonial-link">
                                    <a href="#">Посетитель</a>
                                </div>
                            </li>
                            <!-- END Testimonial 2 -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection