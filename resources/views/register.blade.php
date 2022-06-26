@extends('master')
@section('title', 'Rigister')

@section('content')



    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Sign Up Your Account</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Sign Up</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="{{ route('user.store') }}" method="post">
@csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" required>
                  </div>
          
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="pasword" id="pasword" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="name">Phone Number</label>
                    <input type="number" class="form-control" name="number" id="number" required>
                  </div>

               

                <div class="col-md-6 form-group" style="margin-top: 3%">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Sign Up">
                </div>
              </div>
              <div class="col-md-6 form-group" style="margin-top: 3%">
              <span >Already Have An Account? <a href="{{ route('user.login') }}" >Login Here</a></span>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
@stop