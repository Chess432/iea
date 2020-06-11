@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-blended-learning hero-banner-sm-blended-learning" style="margin-bottom: 50px;">
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
                <div class="col-lg-4 pl-xl-5 about-page-cards"> 
                        <img src="{{asset('images/Portraight Logo2.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">                             
          </div>
            <div class="col-lg-8 pl-xl-5 about-page-cards">
                      <h2>Blended Learning Solutions</h2>
                      <p class="text-justify">When a single learning delivery model doesn&apos;t serve your learning needs, IEA brings a blend of delivery models that fit your learning culture. We blend both instructional-led training and eLearning modules to create a cohesive learning experience.</p>
                      <p class="text-justify">Blended learning is ideal when part of the training requires physical interaction and other parts can be done via eLearning mode as per the learner’s schedule.</p> 
                      <p class="text-justify">We consider the learning modes and techniques that are most appropriate and effective for learners. This approach helps reinforce the content effectively.</p>                         
            </div>
            
    
          </div>
    
    
        </div>
      </section>
    <!--================ End of section =================-->

         <!--================ Start of section =================-->
         <section class="section-margin" >
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12"><h2 class="text-center">We will work with you to design blended learning solutions such as</h2></div>
                            </div>
                        <div class="row align-items-center">
                            
                                <div class="col-lg-6  pl-xl-5">
                                    <ul class="list-group">
                                        <li class="list-group-item">Assessments</li>
                                        <li class="list-group-item">Interactive eLEarning Modules</li>
                                        <li class="list-group-item">Job AIDS</li>
                                        <li class="list-group-item">Coaching</li>
                                    </ul>
                                                                      
                                       </div>
                            <div class="col-lg-6  pl-xl-5">
                                    <ul class="list-group">
                                            <li class="list-group-item">Instructor guides, participant guides and presentation materials</li>
                                            <li class="list-group-item">Webinars</li>
                                            <li class="list-group-item">Activity-based, feedback-rich classroom events</li>
                                            <li class="list-group-item">App-based tools</li>
                                        </ul>
                                 </div> 
                               
                                   
                        </div>                
                      </div>
          </section>
          <!--================ End of section =================-->
    
@endsection