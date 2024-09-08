<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

    @include('home.nav')

{{-- slider --}}

<div id="carouselExample" class="carousel slide" style="margin-top: 50px">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/slider.jfif')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/slider.jfif')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/slider.jfif')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</html>
