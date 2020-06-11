@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-custom-software hero-banner-sm-custom-software" style="margin-bottom: 50px;">
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
                  <h2>Custom software development</h2>
                  <p>At Interactive E-Learning Africa Ltd, we develop software customised to the clients requirements. We are dedicated to build scalable and personalised software that meets the evolving business needs. We make it our ambition to discover better ways of doing things and maxising efficincies.</p>                             
        </div>
        <div class="col-lg-4 pl-xl-5 about-page-cards"> 
                                            
  </div>

      </div>


    </div>
  </section>
<!--================ End of section =================-->

<!--================ Start of section =================-->
<section class="section-margin" >
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12  pl-xl-5">
                       <h2  class="text-center">At IEA we help you in streamlining your business enabling you to:</h2>
                      </div>
                      
                  
                  
                </div>
                <div class="d-lg-flex justify-content-between">
                        <div class="card-feature mb-5 mb-lg-0">
                          <div class="feature-icon">
                            <i class="flaticon-prize"></i>
                          </div> 
                          <h3>Increase revenue.</h3>
                          <p>In the right applications, we believe it can really work and can save your organisation costs and improve performance. We specialise in instructional design and content development. </p>
                        </div>
                
                        <div class="card-feature mb-5 mb-lg-0">
                          <div class="feature-icon">
                            <i class="flaticon-earth-globe"></i>
                          </div> 
                          <h3>Minimize staffing cost</h3>
                          <p>Sometimes e-learning on it's own won't be the answer. If we think this is the case, we'll tell you, and probably suggest a blended solution with face-to-face elements.</p>
                        </div>
                
                        <div class="card-feature mb-5 mb-lg-0">
                          <div class="feature-icon">
                            <i class="flaticon-prize"></i>
                          </div>
                          <h3>Automate workflow</h3>
                          <p>We have an experienced content development team comprising of animators, designers, programmers and testers who work in collaboration to ensure we deliver impeccable learning products.</p>
                        </div>
                      </div>
              </div>
</section>
<!--================ End of section =================-->

<!--================ Start of section =================-->
<section class="section-margin" >
        <div class="container-fluid">
                <div class="row justify-content-center" style="background-color: skyblue; color: #000;">
                    <div class="col-lg-6  pl-xl-5">
                       <p  class="text-justify">Generic software packages designed to suit a broad spectrum of businesses typically don&apos;t effectively address unique or specialised needs. For high performance business outcomes, you need software that is tailor-made to address your specific business practices and workflows. With substantial industry expertise, IEA provides cost effective and reliable technology solutions, customised to meet your specific business goals.</p>
                      </div>
                      <div class="col-lg-6  pl-xl-5">
                          <h3 class="text-center">Our approach.</h3>
                          <p class="text-justify">We understand that the requirements of software are subject to change in the process of development. that is why we employ a collaborative agile approach in our software development process to achieve a quality product.</p>
                      </div>
                      
                  
                  
                </div>
            </div>
        </section>
<!--================ End of section =================-->


@endsection