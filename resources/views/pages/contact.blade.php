@extends('layouts.app')

@section('content')
<!--================Hero Banner Area Start =================-->
<section class="hero-banner-contact hero-banner-sm-contact ">
        <div class="container text-left">
            @if(Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
         @endif
          <h2>Contact Us</h2>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
        </div>
      </section>
      <!--================Hero Banner Area End =================-->
    
    
      <!-- ================ contact section start ================= -->
      <section class="section-margin--large">
        <div class="container">
         <!-- <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px;"></div>
            <script>
              function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var grayStyles = [
                  {
                    featureType: "all",
                    stylers: [
                      { saturation: -90 },
                      { lightness: 50 }
                    ]
                  },
                  {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
                ];
                var map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: -31.197, lng: 150.744},
                  zoom: 9,
                  styles: grayStyles,
                  scrollwheel:  false
                });
              }
              
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
            
          </div> -->
    
    
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
              

              {{-- {!! Form::open(['action' => 'ContactUsController@contactUS', 'method' => 'POST']) !!} --}}
           
              {!! Form::open(['route'=>'contactus.store']) !!}
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                      {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                      {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address'])}}
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group  {{ $errors->has('subject') ? 'has-error' : '' }}">
                      {{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Enter your suject'])}}
                      <span class="text-danger">{{ $errors->first('subject') }}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group  {{ $errors->has('message') ? 'has-error' : '' }}">
                      {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
                      <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                  </div>
                </div>

                <div class="form-group mt-3">
                  {{ Form::submit('Submit', ['class'=>'btn btn-lg button-contactForm'])}}
              </div>
              {!! Form::close() !!}
    
    
            </div>
    
            <div class="col-lg-4">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Nairobi, Kenya.</h3>
                  
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <h3><a href="#">0721 121 696</a></h3>
                  <h3><a href="#">0710 279 464</a></h3>
                  <p>Mon to Fri 9am to 5pm</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3><a href="mailto:info@interactiveelearningafrica.com">IEA Support</a></h3>
                  <p>Send us your query anytime!</p>
                </div>
              </div>
            </div>
    
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
              
            </div>
            <div class="col-md-8 col-lg-9">
              
            </div>
          </div>
        </div>
      </section>
        <!-- ================ contact section end ================= -->
@endsection