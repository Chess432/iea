@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-rapid-development hero-banner-sm-rapid-development" style="margin-bottom: 50px;">
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
               {{-- <img src="{{asset('images/Portraight Logo2.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">                            --}}
          </div>
            <div class="col-lg-8 pl-xl-5 about-page-cards">
                      <h2>Rapid eLearning Solutions</h2>
                      <p class="text-justify">At IEA, we know that sometimes you need quick learning solutions for your rapidly evolving businesses. To quicken the course development process, we follow a rapid development approach complying with your timelines.</p>
                      <p class="text-justify">In this approach, we utilise the oustanding skills of our learning designers who are well-equipped with a wide range of rapid authoring tools.  With these tools in place, eLearning content is developed in a matter of weeks.</p>                          
            </div>
            
    
          </div>
    
    
        </div>
      </section>
    <!--================ End of section =================-->

     <!--================ Start of section =================-->
     <section class="section-margin" >
            <div class="container">
                    <div class="row align-items-center">
                            <div class="col-lg-5  pl-xl-5">
                                <h2 class="text-left">We offer compatible rapid mobile development services</h2>
                                <p class="text-justify">Rapid authoring tools provide for multi-device learning. The published eLearning content will be HTML5 based which is compatible with mobile devices like iPads, Tablets and Smartphones.</p>                                   
                                   </div>
                        <div class="col-lg-7  pl-xl-5">
                        <h2 class="text-left">We emphasize on quality</h2>
                        <p class="text-justify">Rapid eLearning development solutions, when done properly, can be as effective as custom eLearning. When you partner with IEA, you don’t have to compromise on the key design and development aspects.</p>
                        <p class="text-justify">We have qualified instructional designers and graphic designers ensure that the course is instructionally sound and there is no compromise on the aesthetic appeal of the courses. Our rapid eLearning is:
                            <ul style="list-style-type: square;">
                                <li>Interactive and graphically-rich providing rewarding experiences to learners</li>
                                <li>Learner centered, engaging and effective</li>
                            </ul>
                        </p>
                             </div> 
                           
                               
                    </div>                
                  </div>
      </section>
      <!--================ End of section =================-->



           <!--================ Start of section =================-->
     <section class="section-margin" >
            <div class="container">
                    <div class="d-lg-flex justify-content-between">
                            <div class="card-feature">
                              <div class="feature-icon">
                                <i class="flaticon-prize"></i>
                              </div> 
                              <h3>Multi-device compatible.</h3>
                             
                            </div>
                    
                            <div class="card-feature">
                              <div class="feature-icon">
                                <i class="flaticon-earth-globe"></i>
                              </div> 
                              <h3>Minimal SME involvement</h3>
                             
                            </div>

                            <div class="card-feature">
                                    <div class="feature-icon">
                                      <i class="flaticon-earth-globe"></i>
                                    </div>
                                    <h3>Hastened turnaround time</h3>
                                   
                                  </div>
                            </div>                 
                  </div>
      </section>
      <!--================ End of section =================-->


           <!--================ Start of section =================-->
     <section class="section-margin" >
            <div class="container">
                    <div class="row align-items-center">
                            <div class="col-lg-6  pl-xl-5">
                                <h2 class="text-left">Settling on the right authoring tool</h2> 
                                <p class="text-justify">Different authoring tools have different features and purposes. Selecting the appropriate rapid      authoring tool is the key for project’s success.</p>
                                <p class="text-justify">Having developed several hours of rapid eLearning courses, we have the expertise to help
                                        you select the right authoring tools that meet your requirements quickly and cost-effectively.</p>                         
                                   </div>
                        <div class="col-lg-6  pl-xl-5">
                            <h3 class="text-left">Always Select the Tool Depending on:</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">Device compatibility</li>
                                    <li class="list-group-item">Scalability</li>
                                    <li class="list-group-item">Availability of in-built templates</li>
                                    <li class="list-group-item">Customisation level</li>
                                    <li class="list-group-item">Programming skills required</li>
                                </ul>
                             </div> 
                           
                               
                    </div>                
                  </div>
      </section>
      <!--================ End of section =================-->
@endsection