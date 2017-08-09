@extends('layouts.default')

@section('content')

<main class="main-content">

  <!-- Search Course Form -->
  @include('partials.home.search-form')

  <!-- Our Features Style 2 -->
  @include('partials.home.features2')

  @include('partials.home.center-achieve')

  <!-- Most Features Courses -->
  @include('partials.home.most-feature')

  <!-- About Section -->
  @include('partials.home.section-about')

  <!-- Upcoming events -->
  @include('partials.home.events-up')

  @include('partials.home.testimonial2')

  @inlcude('partials.home.lecturer2')

  @include('partials.home.news-latest')

</main>
<!-- main Content -->
@endsection
