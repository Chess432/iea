@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-flash hero-banner-sm-flash" style="margin-bottom: 50px;">
        <div class="container text-center">
            @if(Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
         @endif
    
         <!-- <h2>About Us</h2>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav> -->
          <div class="row">
            <div class="col-lg-8 pl-xl-5 about-page-cards">
                      <h2>Flash to HTML5 conversion</h2>
                      <p >We are experts in converting Flash based legacy e-learning courses to HTML5 mobile friendly to improve learning experience on hand held devices.</p>                             
            </div>
            <div class="col-lg-4 pl-xl-5 about-page-cards"> 
                    <img src="{{asset('images/Portraight Logo2.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">                             
      </div>
    
          </div>
    
    
        </div>
      </section>
    <!--================ End of section =================-->


<!--================ Start of section =================-->
<section class="section-margin" >
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8  pl-xl-5">
              <ul class="list-group">
                <li class="list-group-item">Legacy or Flash based courses to HTML5 Conversion
                      <ul class="list-group">
                              <li class="list-group-item">Convert CBT and legacy Flash content to mobile compatible HTML5 format</li>
                          </ul>
                </li>
                <li class="list-group-item">Responsive Learning with HTML5 conversion
                      <ul class="list-group">
                              <li class="list-group-item">Convert your legacy Flash courses to HTML5 for seamless play in multiple devices</li>
                          </ul>
                </li>
                <li class="list-group-item">Tailor-made Courses
                      <ul class="list-group">
                              <li class="list-group-item">Get your custom-made eLearning modules at affordable prices</li>
                          </ul>
                </li>
                <li class="list-group-item">SCORM Compliant
                      <ul class="list-group">
                              <li class="list-group-item">Provide you SCORM compliant courses that fit in your LMS</li>
                          </ul>
                </li>
              </ul>
              </div>
        <div class="col-lg-4  pl-xl-5">
        <img src="{{asset('images/IEA-LOGO.png')}}" alt="" class="img-fluid">
              </div> 
            
                
    </div>                
    </div>
  </section>
  <!--================ End of section =================-->
@endsection