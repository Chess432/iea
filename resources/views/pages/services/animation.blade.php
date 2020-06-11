@extends('layouts.app')

@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-animation hero-banner-animation-sm" style="margin-bottom: 10px;">
    <div class="container text-center">      
        <div class="row">
                
            <div class="col-lg-12 pl-xl-5 animation-page-cards">
                <div class="card card-animation">
                    <div class="card-body">
                      <h3 class="card-title">Motion Graphics and Interactive Animations</h3>
                      <p class="card-text">At IEA we offer 2D, 3D Animation walk - throughs, corporate presentations, marketing presentations, product demo, commercials with high end graphics and narrations.</p>                     
                    </div>
                  </div>                               
            </div> 
          </div> 
    </div>
  </section>
<!--================ End of section =================-->

<!--================ Start of section =================-->
<section class="section-margin" >
    <div class="container">
            <div class="row" style="background-color: #EFEEED;">
                <div class="col-lg-6 pl-xl-5">
                    <img src="{{ asset('images/animation1.gif') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
                  </div>
              <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                <h3 style="text-align: center">Bring ideas to life.</h3>
                <p class="text-justify">Combining Graphics, Multimedia Applications and Animation, we create content for a marketing experience of sights and sounds that surrounds your brand audience in front office lounge via LCD screens, in supermarkets, shopping malls, airports, online via websites and social video sharing sites. Interactive marketing is a powerful way of rejuvenating corporate brands in a fun way.</p>
              </div>
              
            </div>




    <div class="row" style="background-color: #F5F8FA;">
        <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
        <h3 style="text-align: center">Motion Graphics.</h3>
        <p class="text-justify">These are graphics that use video footage and/or animation technology to create the illusion of motion or rotation, and are usually combined with audio for use in multimedia projects. Our motion graphics allow brands to present a single idea, process or key message in a captivating way.</p>
        </div>   
        <div class="col-lg-6 pl-xl-5">
        <img src="{{ asset('images/animation2.gif') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
        </div>           
    </div>






    <div class="row" style="background-color: #B6DEC0;">
            <div class="col-lg-6 pl-xl-5">
            <img src="{{ asset('images/animation3.gif') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
            </div> 
            <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
            <h3 style="text-align: center">Brand Design.</h3>
            <p class="text-justify">In the Design phase we provide you with Concepts to review and critique. These serve as the blueprint for the Graphic Designers, and the instructions for the Programmers. You also receive preliminary designs of the course artwork.</p>
            </div>   
                      
        </div>



          </div>
</section>
<!--================ End of section =================-->
@endsection