@extends('layouts.app')

<!--================ Start of banner section =================-->
@section('content')
<!-- <div id="bgMain"> -->
<section class="hero-banner">
  <div class="container text-center">    
    <h1>Interactive E-Learning Africa Ltd</h1>
   <p>Designs, Develops and Delivers technology based interactive e-learning solutions</p>
    <a class="button button-header" href="/about">More...</a> 
    <!-- <button type="button" class="btn btn-danger video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/fXrcebX6d3E" data-target="#myModal">Play The Video</button> -->
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay" allowfullscreen></iframe>
</div>
        
      </div>

    </div>
  </div>
</div> 
  </div>
</section>
<!--</div> -->
{{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="{{asset('images/homepage.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slide2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slide3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}

<!--================ End of banner section =================-->



<!--================ Start of first row section =================-->
<section class="section-padding--small bg-white">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img src="images/chara 1.png" alt="Interactive E-Learning Africa" class="img-fluid">  
          </div>
      <div class="col-lg-8 align-self-center">
          <h3 class="primary-text">Digitizing syllabus content</h3>
          <p class="text-justify">IEA specialises in the development of custom elearning solutions using relevant and modern design principles to achieve an exceptional learning experience. We have an experienced content development team comprising of animators, designers, programmers and testers who work in collaboration to ensure we deliver impeccable learning products.</p>
      </div>
      
    </div>
  </div>
</section>
<!--================ End of first row section =================-->


<!--================ Start of first row section =================-->
<section class="section-padding--small bg-blue">
  <div class="container">
    <div class="row">
        <div class="col-lg-9 pl-xl-5">
          <!-- <h2 style="text-align: center; color: #fff;">Sample content</h2> -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{asset('Storyline/story.html')}}" allowfullscreen></iframe>
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





<!--================ Join section Start =================-->
<section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-98px">
        <h2 class="primary-text">Why Choose IEA</h2>
        <!-- <img src="img/home/section-style.png" alt=""> -->
      </div>
1

      <div class="d-lg-flex justify-content-between">
        <div class="card-feature mb-5 mb-lg-0">
          <!--<div class="feature-icon">
            <i class="flaticon-prize"></i>
          </div> -->
          <h3>We live and breathe e-learning.</h3>
          <p>In the right applications, we believe it can really work and can save your organisation costs and improve performance. We specialise in instructional design and content development. </p>
         <!-- <a href="#" role="button" class="btn btn-primary">Read more...</a> -->
        </div>

        <div class="card-feature mb-5 mb-lg-0">
          <!--<div class="feature-icon">
            <i class="flaticon-earth-globe"></i>
          </div> -->
          <h3>Blended solutions</h3>
          <p>Sometimes e-learning on it's own won't be the answer. If we think this is the case, we'll tell you, and probably suggest a blended solution with face-to-face elements.</p>
         <!-- <a href="#" role="button" class="btn btn-primary">Read more...</a>-->
        </div>

        <div class="card-feature mb-5 mb-lg-0">
          <!--<div class="feature-icon">
            <i class="flaticon-sing"></i>
          </div>-->
          <h3>Collaboration</h3>
          <p>We have an experienced content development team comprising of animators, designers, programmers and testers who work in collaboration to ensure we deliver impeccable learning products.</p>
         <!-- <a href="#" role="button" class="btn btn-primary">Read more...</a> -->
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 text-center">
          <a class="button mr-3 mb-2" href="/about">Learn More</a>
          <a class="button mb-2" href="/contact">Contact us</a>
        </div>
      </div>
    </div>
  </section>
  <!--================ Join section End =================-->

@endsection