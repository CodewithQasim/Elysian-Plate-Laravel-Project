
@extends('layouts.web')
@section('content')
<!-- Carousel Section -->
<div id="carouselExampleCaptions" class="carousel slide">
  <!-- Carousel Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Carousel Items -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('images/header2.jpg') }}" class="d-block w-100" alt="Slide 1" style="height:70vh">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom:160px">
        <h5 style="color:white; font-size:28px">A Taste of Euphoria</h5>
        <p style="color:white; font-size:18px">Indulge in an unforgettable culinary journey with dishes crafted to perfection, offering a blend of tradition and innovation</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('images/header1.jpg') }}" class="d-block w-100" alt="Slide 2" style="height:70vh">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom:160px">
        <h5 style="color:white; font-size:28px">Savor Every Moment</h5>
        <p style="color:white; font-size:18px">From our kitchen to your table, experience the rich flavors and fresh ingredients that define the essence of Elysian Plate.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('images/header3.jpg') }}" class="d-block w-100" alt="Slide 3" style="height:70vh">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom:160px">
        <h5 style="color:white; font-size:28px">Where Every Bite Matters</h5>
        <p style="color:white; font-size:18px">Enjoy an exquisite dining experience in a warm, inviting atmosphere. We bring the finest ingredients to your plate, ensuring every meal is a delight.</p>
      </div>
    </div>
  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Award Winning Dishes Section -->
<section class="section3">
  <h1>Our Award Winning Dishes</h1>
  <div class="grid">
    <!-- Grid of Award Winning Dishes -->
    <div><img src="{{ asset('images/img-01.jpg') }}" alt="Dish 1" /></div>
    <div><img src="{{ asset('images/img-02.jpg') }}" alt="Dish 2" /></div>
    <div><img src="{{ asset('images/img-03.jpg') }}" alt="Dish 3" /></div>
    <div><img src="{{ asset('images/img-04.jpg') }}" alt="Dish 4" /></div>
    <div><img src="{{ asset('images/img-05.jpg') }}" alt="Dish 5" /></div>
    <div><img src="{{ asset('images/img-06.jpg') }}" alt="Dish 6" /></div>
    <div><img src="{{ asset('images/img-07.jpg') }}" alt="Dish 7" /></div>
    <div><img src="{{ asset('images/img-08.jpg') }}" alt="Dish 8" /></div>
    <div><img src="{{ asset('images/img-09.jpg') }}" alt="Dish 9" /></div>
  </div>
</section>

<!-- About Elysian Plate Section -->
<section class="section1">
  <div>
    <img src="{{ asset('images/image.png') }}" alt="About Elysian Plate Image" />
  </div>
  <div>
    <h2>About Elysian Plate</h2>
    <p>
      Welcome to The Elysian Plate, a fine dining experience fit for a king or queen. We are thrilled to have you join us for an evening of culinary excellence.
      Our talented chefs have crafted a menu featuring the finest ingredients, expertly prepared and presented with care.
    </p>
    <p class="btn"><a href="{{ route('contact') }}">Reservation</a></p>
  </div>
</section>

<!-- Subscription Section -->
<section class="container subscription-container">
  <div class="subscription-box">
    <h2>Get Our Latest Offers!</h2>
    <p>Join our newsletter to receive exclusive offers, delicious updates, and the latest happenings at Elysian Plate!</p>
    <div class="input-group">
      <input type="email" placeholder="Your Email" class="email-input">
      <button class="subscribe-btn">SUBSCRIBE</button>
    </div>
  </div>
</section>
@endsection