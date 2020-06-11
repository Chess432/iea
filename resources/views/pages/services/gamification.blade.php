@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-gamification hero-banner-sm-gamification" style="margin-bottom: 50px;">
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
          <div class="row content-center">
                
            <div class="col-lg-12 pl-xl-5 about-page-cards">
                <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Gamification</h2>
                      <p class="card-text">With our gamification strategy we take your eLearning to the next level! We believe that learning should be fun and motivating.</p>
                <p class="card-text"><em>IEA aims to create immersive game-based learning experiences to engage the learners and enhance their performance and productivity.</em></p>  
                <p class="card-text "><em>We combine the gamified elements with instructional design and bring the real-world context to learning so that your learners can practice in a safe environment. Our Gamification solutions support all kinds of training ranging from induction to compliance.</em></p> 
                     
                    </div>
                  </div>                               
            </div> 
          </div>
        </div>
      </section>
    <!--================ End of section =================-->

    <!--================ Start of first row section =================-->
<section class="section-padding--small bg-blue">
  <div class="container">
    <div class="row">
        <div class="col-lg-9 pl-xl-5">
          <!-- <h2 style="text-align: center; color: #fff;">Sample content</h2> -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{asset('crossword/story.html')}}" allowfullscreen></iframe>
              </div>
          
          </div>
      <div class="col-lg-3 align-self-center mb-5 mb-lg-0">
        <div class="innovative-wrapper">
          <h3 class="primary-text" style="color: #fff;">Interactive E-Learning Africa</h3>
          <p class="h4 primary-text2 mb-3">Digitizing syllabus content</p>
          <p class="primary-text2-p">Our learning products are built with ultimate interactivity to engage the learner in every step of the course. We manage to maintain the learners attention throughout the study by implementing dynamic design and incorporating relevant storylines. Interactive eLearning Africa has thrived in digitizing learning content and adding interaction flavour. We understand technology is rapidly changing the learning sector; that is why we offer a rich and interactive learning content easily accessed through handheld digital devices.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!--================ End of first row section =================-->

<!--================ Start of section =================-->
<section class="section-margin" >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Our gamified eLearning offers</h2>
            </div>
          </div> 
          <div class="d-lg-flex justify-content-between">
                <div class="card-feature mb-5 mb-lg-0">
                  <div class="feature-icon">
                    <i class="flaticon-prize"></i>
                  </div>
                  <h3>Real life environment.</h3>          
                </div>
                <div class="card-feature mb-5 mb-lg-0">
                  <div class="feature-icon">
                    <i class="flaticon-prize"></i>
                  </div>
                    <h3>Higher engagement levels.</h3>          
                </div>
          
                <div class="card-feature mb-5 mb-lg-0">
                  <div class="feature-icon">
                    <i class="flaticon-prize"></i>
                  </div>
                      <h3>Transforming learning to performance.</h3>          
                </div>       
                                   
                          </div>              
        </div>
      </section>
      <!--================ End of section =================-->
@endsection