@extends('layouts.layout')
<!-- Main Content -->
@section('maincontent')
    <div class="main-content">
        <div class="main-content-inner content-width">


            <!-- Main Column / Sidebar -->

            <div class="column-container">


                <!-- Main Column -->

                <div class="column-three-qtr">


                    <!-- Blog Post -->

                    <div class="blog-post">
                        <!-- Title -->
                        <h1><a href="blog-post.html">Заголовок новости на сайте</a></h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <div class="meta-title published">Дата:</div>
                                <a href="#">31 августа 2016</a></div>
                            <div class="meta-item">
                                <div class="meta-title views">Просмотры:</div>
                                <a href="#">9</a></div>
                            <div class="meta-item">
                                <div class="meta-title comments">Комментарии:</div>
                                <a href="#">2</a></div>
                            <div class="meta-item">
                                <div class="meta-title tags">Теги</div>
                                <a href="#">новости</a>, <a href="#">шаблоны</a></div>
                        </div>
                        <!-- Image -->
                        <a href="blog-post.html" class="media image-link"><img alt=""
                                                                               src="images\placeholders\preview9.jpg"
                                                                               class="fullwidth"></a>
                        <!-- Excerpt -->
                        <div class="blog-content">
                            <p>Позиционирование на рынке, как следует из вышесказанного, индуцирует анализ зарубежного
                                опыта. Можно предположить, что точечное воздействие нетривиально. По сути, структура
                                рынка очевидна не для всех...</p>
                            <!-- Read More Button -->
                            <a href="" class="button accent">Читать далее</a>
                        </div>
                    </div>

                    <!-- END Blog Post -->


                    <!-- Blog Post -->

                    <div class="blog-post">
                        <!-- Title -->
                        <h1><a href="blog-post.html">Заголовок новости на сайте</a></h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <div class="meta-title published">Дата:</div>
                                <a href="#">31 августа 2016</a></div>
                            <div class="meta-item">
                                <div class="meta-title views">Просмотры:</div>
                                <a href="#">9</a></div>
                            <div class="meta-item">
                                <div class="meta-title comments">Комментарии:</div>
                                <a href="#">2</a></div>
                            <div class="meta-item">
                                <div class="meta-title tags">Теги</div>
                                <a href="#">новости</a>, <a href="#">шаблоны</a></div>
                        </div>
                        <!-- Excerpt -->
                        <div class="blog-content">
                            <p>Позиционирование на рынке, как следует из вышесказанного, индуцирует анализ зарубежного
                                опыта. Можно предположить, что точечное воздействие нетривиально. По сути, структура
                                рынка очевидна не для всех ...</p>
                            <!-- Read More Button -->
                            <a href="" class="button accent">Читать далее</a>
                        </div>
                    </div>

                    <!-- END Blog Post -->


                    <!-- Blog Post -->

                    <div class="blog-post">
                        <!-- Title -->
                        <h1><a href="blog-post.html">Заголовок новости на сайте</a></h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <div class="meta-title published">Дата:</div>
                                <a href="#">31 августа 2016</a></div>
                            <div class="meta-item">
                                <div class="meta-title views">Просмотры:</div>
                                <a href="#">9</a></div>
                            <div class="meta-item">
                                <div class="meta-title comments">Комментарии:</div>
                                <a href="#">2</a></div>
                            <div class="meta-item">
                                <div class="meta-title tags">Теги</div>
                                <a href="#">новости</a>, <a href="#">шаблоны</a></div>
                        </div>
                        <!-- Image -->
                        <a href="blog-post.html" class="media image-link"><img alt=""
                                                                               src="images\placeholders\preview8.jpg"
                                                                               class="fullwidth"></a>
                        <!-- Excerpt -->
                        <div class="blog-content">
                            <p>Позиционирование на рынке, как следует из вышесказанного, индуцирует анализ зарубежного
                                опыта. Можно предположить, что точечное воздействие нетривиально. По сути, структура
                                рынка очевидна не для всех ...</p>
                            <!-- Read More Button -->
                            <a href="" class="button accent">Читать далее</a>
                        </div>
                    </div>

                    <!-- END Blog Post -->


                    <!-- Navigation -->


                    <div class="blog-nav">
                        <a href="#" class="back">Назад</a>
                        <a href="#" class="next">Вперед</a>
                    </div>


                    <!-- END Navigation -->


                </div>

                <!-- END Main Column -->


                <!-- Sidebar -->

                <div class="column-one-fourth sidebar">


                    <!-- Categories -->

                    <div class="sidebar-widget categories">
                        <!-- Title -->
                        <h3>Категории новостей</h3>
                        <!-- Category Links -->
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                    </div>

                    <!-- END Categories -->


                    <!-- Search -->

                    <div class="sidebar-widget search">
                        <!-- Title -->
                        <h3>Поиск по сайту</h3>
                        <!-- Search Form -->
                        <form name="blog-search" method="get" action="#">
                            <div class="container">
                                <!-- Textbox -->
                                <input type="text" id="blog-search" name="blog-search" placeholder="Искать">
                                <!-- Search Button -->
                                <input type="submit" id="go" class="go" value="&#xf002;">
                            </div>
                        </form>
                    </div>

                    <!-- END Search -->


                    <!-- Latest Project -->

                    <div class="sidebar-widget project">
                        <!-- Title -->
                        <h3>Новость дня</h3>
                        <!-- Image -->
                        <a href="#" class="image-link"><img alt="" src="images\placeholders\preview4.jpg"
                                                            class="fullwidth"></a>
                        <!-- Project Title -->
                        <h3 class="sub-title"><a href="#">Заголовок новости</a></h3>
                        <!-- Tags -->
                        <div class="tags">Категория</div>
                    </div>

                    <!-- END Latest Project -->


                    <!-- Popular Posts -->

                    <div class="sidebar-widget posts">
                        <!-- Title -->
                        <h3>Последнее</h3>


                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt=""
                                                                                      src="images\placeholders\preview9-mini.jpg"
                                                                                      class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента
                                        экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->


                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt=""
                                                                                      src="images\placeholders\preview11-mini.jpg"
                                                                                      class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента
                                        экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->


                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt=""
                                                                                      src="images\placeholders\preview8-mini.jpg"
                                                                                      class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента
                                        экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->


                    </div>

                    <!-- END Popular Posts -->


                </div>

                <!-- END Sidebar -->


            </div>

            <!-- END Main Column / Sidebar -->


        </div>
    </div>
@endsection
<!-- END Main Content -->
