@extends('layouts.app')


@section('title')
    NOMADS
@endsection

@section('content')

<!-- header -->
<header class="text-center">
    <h1>
      Explore The Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful moment
      <br />
      you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br />
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(frontend/images/popular-1.jpg)">
              <div class="travel-contry">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('details') }}" class="btn btn-travel-details px-4"> View Details </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(frontend/images/popular-2.jpg)">
              <div class="travel-contry">INDONESIA</div>
              <div class="travel-location">BROMO, JAWA TENGAH</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('details') }}" class="btn btn-travel-details px-4"> View Details </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(frontend/images/popular-3.jpg)">
              <div class="travel-contry">INDONESIA</div>
              <div class="travel-location">NUSA PENIDA, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('details') }}" class="btn btn-travel-details px-4"> View Details </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(frontend/images/popular-4.jpg)">
              <div class="travel-contry">INDONESIA</div>
              <div class="travel-location">KARIMUN, JAWA TENGAH</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('details') }}" class="btn btn-travel-details px-4"> View Details </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br />
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="{{ url('frontend/images/netwoks_logo.png') }}" alt="network_logo" class="network-logo" />
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>Ther Are Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-populer-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/marley.png" alt="user" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Rizal Marley</h3>
                <p class="testimonial">“ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “</p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Karimun, Jawa, Indonesia</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/ziggymarley.png" alt="user" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Ziggy Marley</h3>
                <p class="testimonial">“ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “</p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Bromo, Jawa, Indonesia</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/adamlevin.png" alt="user" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Adam Levin</h3>
                <p class="testimonial">“ I loved it when the waves was shaking harder - I was scared too “</p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Nusa Penida, Bali, Indonesia</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
            <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
          </div>
        </div>
      </div>
    </section>
  </main>
    
@endsection