@extends('layouts.layout')
@section('maincontent')
<!-- Main Content -->
<div class="main-content">
    <div class="main-content-inner content-width">

        <div class="relative">

            <!-- Page Title -->

            <h1>Галерея</h1>

            <!-- END Title -->


            <!-- Filters -->

            <!-- Ensure all filter tags are in the "show all" data-filter -->
            <div class="portfolio-filtering">
                <ul id="portfolio-filters">
                    <li><span class="filter active" data-filter="branding coding identity">Все</span></li>
                    <li><span class="filter" data-filter="branding">Новые</span></li>
                </ul>
            </div>

            <!-- END Filters -->

        </div>


        <!-- 4 Column Portfolio Grid -->

        <!-- Add filter tags to each li class -->
        <ul class="column-container grid" id="portfolio">

            <!-- One Fourth -->
            @foreach($projects as $project)
            <li class="column-one-fourth portfolio-item branding">
                <!-- Image -->
                <a href="#" class="image-link"><img alt="" src="{{asset($project->image)}}" class="fullwidth"></a>
                <!-- Title -->
                <h3><a href="#">{{$project->name}}</a></h3>
                <!-- Tags -->
                <div class="tags">{{$project->description}}</div>
            </li>
            @endforeach

            <!-- END One Fourth -->
        </ul>

        <!-- END 4 Column Portfolio Grid -->


    </div>
</div>
@endsection
<!-- END Main Content -->