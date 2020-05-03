{{--
  Template Name: Projects
--}}
@extends('layouts.app')
@section('content')

    <div class="main-carousel">
      @php($number_of_posts = wp_count_posts('project'))

     @foreach($all_posts as $index => $post)

      <div class="carousel-cell">
        <div class="project">
          <div class="technology">
            <p>{{$post['technology']}}</p>
            <div class="line"></div>
          </div>
          <img src=" {{ $post['thumbnail'] }}">
          <div class="right_container">
            <div></div>
            <div class="infos_container">
              <h2 class="title">{{ $post['title']}}</h2>
              <a href="{{ $post['link'] }}">
                <div data-cursor="click" class="button">
                  <div></div>
                  @include('partials.arrow-right')
                  <p>Voir le projet</p>
                </div>
              </a>
            </div>
            <p>{{$index + 1}} / {{ $number_of_posts->publish }}</p>
          </div>
        </div>
      </div> {{--  carsousel-cell--}}

      @endforeach

{{--    <div class="scrollbar_container">--}}
{{--      <div class="scrollbar"></div>--}}
{{--    </div>--}}
  </div>{{--  main_carousel--}}

@endsection