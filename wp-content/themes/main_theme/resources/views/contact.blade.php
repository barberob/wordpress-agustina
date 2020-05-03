{{--
  Template Name: Contact
--}}

@extends('layouts.app')
@section('content')
  <h1>{{ the_title() }}</h1>
  <div class="contact_container">
    <img src="{{ $thumbnail }}" alt="">
    <div class="infos_container">
      <h2>N'hesitez à me faire un coucou</h2>
      <p>contact@benoitbarberot.fr</p>
    </div>

  </div>



@endsection
