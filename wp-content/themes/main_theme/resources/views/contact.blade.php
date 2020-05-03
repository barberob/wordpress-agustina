{{--
  Template Name: Contact
--}}

@extends('layouts.app')
@section('content')
  <h1>{{ the_title() }}</h1>
  <div class="contact_container">
    <img src="{{ $thumbnail }}" alt="">
    <div class="infos_container">
      <h2>{{ $main_text }}</h2>
      <a data-cursor="salut" href="mailto:{{$mail}}" ><p>{{$mail}}</p> </a>
    </div>

  </div>



@endsection
