@extends('layouts.app')

@section('content')

<div class="inner_wrap">
    <div class="project_top">
      <div class="title_container">
        <h1 >
          @foreach($split_title as $letter)
            <span class="letter_container">{{$letter}}</span>
          @endforeach

        </h1>
      </div>
      <div class="technologies">
        @foreach($project_technologies as $technology)
          <p>{{$technology}}</p>
          <span class="separator"></span>
        @endforeach
      </div>
      <span class="scroll_indicator">
        @include('svg.arrow-down')
      </span>
    </div>


  <div class="content_container">
      <img src="{{$thumbnail}}" alt="">
    <div class="description_container">
      <h2>Le projet</h2>
      <p>{{ $description }}</p>
      <a href="{{ $project_link }}" data-cursor="click" target="_blank"> Voir le site </a>
    </div>
  </div>


  <div class="previous_next_links">

    @if($previous_post)
    <a href="{{ $previous_post['link'] }}">
      <div data-cursor="click" class="link_container previous">
        <div>
          <p class="title">{{ $previous_post['title'] }}</p>
        </div>
        <p>Projet précédent</p>
      </div>
    </a>
    @else
      <a href="/projects">
        <div data-cursor="click" class="link_container all">
          <div></div>
          <p class="all" >Tous les projets</p>
        </div>
      </a>
    @endif


    @if($next_post)
      <a href="{{ $next_post['link'] }}">
        <div data-cursor="click" class="link_container next">
          <div>
            <p class="title">{{ $next_post['title'] }}</p>
          </div>
          <p>Projet suivant</p>
        </div>
      </a>
    @else
      <a href="/projects">
        <div data-cursor="click" class="link_container all">
          <div></div>
          <p class="all" >Tous les projets</p>
        </div>
      </a>
    @endif
  </div>
</div> {{--inner_wrap--}}

@endsection
