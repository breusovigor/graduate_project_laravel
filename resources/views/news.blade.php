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

                    @foreach($news as $item)
                    <div class="blog-post">
                        <!-- Title -->
                        <h1><a href="blog-post.html">{{$item->news_title}}</a></h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <div class="meta-title published">Дата:</div>
                                <a href="#">{{$item->created_at}}</a></div>
                            <div class="meta-item">
                                <div class="meta-title views">Просмотры:</div>
                                <a href="#">{{$item->views}}</a></div>
                            <div class="meta-item">
                                <div class="meta-title comments">Комментарии:</div>
                                <a href="#"></a></div>
                        </div>
                        <!-- Image -->
                        <a href="/news-post/{{$item->id}}" class="media image-link"><img alt=""
                                                                               src="{{$item->news_preview}}"
                                                                               class="fullwidth"></a>
                        <!-- Excerpt -->
                        <div class="blog-content">
                            <p>{{$item->news_short_content}}</p>
                            <!-- Read More Button -->
                            <a href="" class="button accent">Читать далее</a>
                        </div>
                    </div>
                    @endforeach

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
                        @foreach($categories as $category)
                        <a href="#">{{$category->category_name}}</a>
                        @endforeach
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
