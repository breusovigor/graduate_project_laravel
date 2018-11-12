@extends('layouts.layout')
@section('maincontent')

    <div class="main-content">
        <div class="main-content-inner content-width">

            <!-- Main Column / Sidebar -->

            <div class="column-container">


                <!-- Main Column -->

                <div class="column-three-qtr">


                    <!-- Blog Post -->

                    <div class="blog-post actual-post">
                        <!-- Title -->
                        <h1>{{$news->news_title}}</h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <div class="meta-title published">Дата:</div>
                                <a href="#">{{date('d.m.Y', strtotime($news->created_at))}}</a></div>
                            <div class="meta-item">
                                <div class="meta-title views">Просмотры:</div>
                                <a href="#">{{$news->views}}</a></div>
                            <div class="meta-item">
                                <div class="meta-title comments">Комментарии:</div>
                                <a href="#">{{$comment->count()}}</a></div>
                        </div>


                        <!-- Content -->

                        <div class="blog-content">
                            <!-- Paragraph -->
                            <p>Правда, специалисты отмечают, что формирование имиджа транслирует баинг и селлинг.
                                Медиабизнес спонтанно отталкивает ролевой conversion rate.</p>

                            <div class="media">
                                <div id="portfolio-blog-slider-container">

                                    <div id="portfolio-blog-slider">

                                        <!-- Actual Images -->

                                        <img alt="" src="{{asset($news->news_preview)}}" class="fullwidth">


                                        <!-- END Actual Images -->

                                    </div>


                                    <!-- Slide Controls -->

                                    <div class="portfolio-blog-slider-controls">
                                        <div id="portfolio-blog-slider-prev"></div>
                                        <div id="portfolio-blog-slider-next"></div>
                                    </div>

                                    <!-- END Slide Controls -->


                                </div>
                            </div>

                            <!-- END Image -->


                            <!-- H3 Title -->
                            <h3>{{$news->news_short_content}}</h3>
                            <!-- Paragraph -->
                            <p>{{$news->news_content}}</p>
                        </div>

                        <!-- END Content -->


                    </div>

                    <!-- END Blog Post -->


                    <!-- Share Links -->

                    <ul class="post-sharing">
                        <li><a href="#"><i class="fa fa-facebook"></i>
                                <div class="tooltip">Поделиться в Facebook</div>
                            </a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>
                                <div class="tooltip">Поделиться в Twitter</div>
                            </a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i>
                                <div class="tooltip">Поделиться в LinkedIn</div>
                            </a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i>
                                <div class="tooltip">Поделиться в Pinterest</div>
                            </a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i>
                                <div class="tooltip">Поделиться в Google+</div>
                            </a></li>
                    </ul>

                    <!-- END Share Links -->


                    <!-- Divider -->

                    <div class="divider"></div>

                    <!-- END Divider -->


                    <!-- Reader Comments -->

                    <div class="comments">
                        <h2>Комментарии к статьи</h2>


                        <!-- Comment -->
                        @foreach($comment as $item)
                        <div class="comment">
                            <!-- Username -->
                            <div class="username">
                                <a href="#">{{$item->name}}</a> пишет:
                            </div>
                            <!-- Date -->
                            <div class="date">
                                {{date('d.m.Y', strtotime($item->created_at))}}
                            </div>
                            <!-- Message -->
                            <div class="message">
                                <p>{{$item->comment_text}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- END Comment -->


                    </div>

                    <!-- END Reader Comments -->


                    <!-- Divider -->

                    <div class="divider"></div>

                    <!-- END Divider -->


                    <!-- Post Comment Form -->

                    <div class="comment-form">
                        <h2>Оставить комментарий</h2>
                        <form id="comment-form" name="comment-form" method="post" action="{{ route('comment', $news->id)}}">
                        {{ csrf_field() }}
                            <!-- Textbox -->
                            <input type="text" name="name" placeholder="Имя *" value="{{ old('name') }}">
                            <!-- Textbox -->
                            <input type="text" name="email" placeholder="Email *" value="{{ old('email') }}">
                            <!-- Textbox -->
                            <input type="text" name="theme" placeholder="Тема *" value="{{ old('theme') }}">
                            <!-- Comment box -->
                            <textarea name="message" placeholder="Сообщение *" value="{{ old('message') }}"></textarea>
                            <!-- Submit Button -->
                            <input type="submit" class="accent" value="Готово">
                        </form>
                    </div>

                    <!-- END Post Comment Form -->


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
                        @foreach($lastNews as $last)
                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="news-post/{{$last->id}}" class="image-link mini"><img alt=""
                                                                                      src="{{asset($last->news_preview)}}"
                                                                                      class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="news-post/{{$last->id}}">{{$last->short_content}}</a></h3>
                                <!-- Date -->
                                <div class="date">{{date('d.m.Y', strtotime($last->created_at))}}</div>
                            </div>
                        </div>
                        @endforeach
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
