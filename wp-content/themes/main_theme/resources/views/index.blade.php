{{--
  Template Name: home
--}}


@extends('layouts.app')

@section('content')

  <div class="intro_container">
      <div class="animation_container">
        <div class="thumbnail_container" style="background-image: url('{{ $thumbnail }}');"></div>
      </div>
      <div class="description_container">
        <h2>{{ the_title() }}</h2>
        <p>{{ $introduction }}</p>
        <a data-cursor="click" href="{{ get_permalink(get_page_by_title('projects')) }}">{{ $link_to_projects_text }}</a>
      </div>
  </div>


@endsection

