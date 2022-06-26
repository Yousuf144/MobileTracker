@extends('master')
@section('title', 'Home')

@section('content')


  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">Track Your Mobile with MobiTracker</h1>
     
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('user.create') }}" class="btn btn-outline-white">Sign UP</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap">
              <img src="{{ asset('assets/front/img/phone_1.png')}}" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="{{ asset('assets/front/img/phone_2.png')}}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Our Future</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Manege Your Account</h3>
              <p>Manage Your Account. Easily Add New Mobile And Delete  </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-brightness-high"></i>
              </div>
              <h3 class="mb-3">Easy To Use</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Safe And Secure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="section">
        <div class="container">
  
          <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
              <h2 class="section-heading">Choose A Plan</h2>
            </div>
          </div>
          <div class="row align-items-stretch">
  @foreach ($data['package'] as $item )
            <div class="col-lg-4 mb-4 mb-lg-0" style="margin-top:5%">
              <div class="pricing h-100 text-center" >
                <span>&nbsp;</span>
                <h3>{{$item->package_name}}</h3>
                <ul class="list-unstyled">
                  <li>Create up to {{$item->allowed_user}} Account</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">{{($item->price == 0)?'Free':'Rs ' .$item->price . "/Year"}}</strong>
                  <p><a href="#" class="btn btn-white">Choose Plan</a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="{{ asset('assets/front/img/undraw_svg_1.svg')}}" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Sign Up</h3>
              <p>Sign Up Your Account As a Admin</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Login</h3>
              <p>Login Your In Admin Panel</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Create Account</h3>
              <p>Create Your Mobile Tracking Account For App</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">04</span>
              <h3>Login Account</h3>
              <p>Login Your Mobile Tracking Account In App</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">05</span>
              <h3>Start Tracking</h3>
              <p>Click Start Tracking Button In Mobile App</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">06</span>
              <h3>Enjoy Tracking</h3>
              <p>See Your All Mobile Current Location</p>
            </div>
          </div>
        </div>
      </div>

    </section>




    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Download Tracking App</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

 
@stop