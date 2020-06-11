@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-mobile-learning hero-banner-sm-mobile-learning" style="margin-bottom: 50px;">
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
                <h2>Custom Content Development</h2>
                <p class="text-left">With our gamification strategy we take your eLearning to the next level! We believe that learning should be fun and motivating.</p>
                <p class="text-justify"><em>IEA aims to create immersive game-based learning experiences to engage the learners and enhance their performance and productivity.</em></p>  
                <p class="text-justify"><em>We combine the gamified elements with instructional design and bring the real-world context to learning so that your learners can practice in a safe environment. Our Gamification solutions support all kinds of training ranging from induction to compliance.</em></p>                
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
    <div class="row">
      <div class="col-lg-4">
      <img src="{{ asset('images/Portraight Logo2.png')}}" alt="Interactive eLearning Africa" class="img-fluid">
      </div>

      <div class="col-lg-8">
        <h2 class="text-center">We improve learning courses that improve learning experiences</h2>
        <p class="text-justify">Our online training courses are designed around the core learning elements of active learning. We endevour  to capture the learners attention through relevant storylines, dynamic design and informative narratives.</p>
        <p class="text-justify">IEA has the ability to offer effective solutions in converting the existing content into interactive eLearning content.</p>
      </div>
    </div>             
  </div>
</section>
<!--================ End of section =================-->


<!--================ Start of section =================-->
<section class="section-margin" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="text-center">Memorable and measurable</h2>
        <ul style="list-style-type:square">
          <li>We have SCORM and AICC complaint courses that help you to track learner progress via Learning Management System.</li>
          <li>Interactive and dynamic nature of courses output an outsanding digital learning experience which creates a lasting impression.</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <h2 class="text-center">Relevant and Authentic</h2>
        <ul style="list-style-type:square">
          <li>We will help to you to design learning content customized to fit in your organization.</li>
          <li>Courses are developed specifically to fit to your brand and style guidelines.</li>
          <li>Simulations, scenarios, case studies are incorporated so the learners can connect their experiences with real world examples.</li>
        </ul>
      </div>
    </div>             
  </div>
</section>
<!--================ End of section =================-->



<!--================ Start of section =================-->
<section class="section-margin" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="text-center">Interactive learning environment</h2>
        <ul style="list-style-type:square">
          <li>The gamified approach of learning creates a fun environment with realistic challenges throughout the course</li>
          <li>The approach involves assesment activities designed to test knowledge and learners decision making skills.</li>
          <li>We utilize HTML5 tools in creating the course. This makes our content to be accessible accross different platforms.</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <h2 class="text-center">Meaniful and motivational</h2>
        <ul style="list-style-type:square">
          <li>Our learning content is designed to reduce cognitive overload and improve learners understandign and retention.</li>
          <li>COntent is developed with learner in mind making it rich and offering a personalised learning experience.</li>
        </ul>
      </div>
    </div>             
  </div>
</section>
<!--================ End of section =================-->
@endsection