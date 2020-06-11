@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-webapp hero-banner-sm-webapp" style="margin-bottom: 50px;">
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
              <div class="col-lg-4 pl-xl-5"> 
                  
                </div>
            <div class="col-lg-8 pl-xl-5 about-page-cards">

                <div class="card" style="border-radius: 20px;">
                    <div class="card-body">
                      <h2 class="text-left">Web design and application development</h2>
                      
                <p class="text-justify"><em>If you need a fully functional, cost effective and secure web application, Interactive ELearning Africa Ltd is the ultimate choice</em></p>  
                <p class="text-justify "><em>Online presence is a key contributor to the sucees of business in the current business environment. At IEA, we have the necesaary knowledge and expertise required to create functional and interactive websites showcasing your products and services in the best way posssible.</em></p> 
                     
                    </div>
                  </div>  


                   <!--   <h2>Web design and application development</h2>
                      <p class="text-justify font-weight-light">If you need a fully functional, cost effective and secure web application, Interactive eLearning Africa Ltd is the ultimate choice</p>
                      <p class="text-justify font-weight-light small">Online presence is a key contributor to the sucees of business in the current business environment. At IEA, we have the necesaary knowledge and expertise required to create functional and interactive websites showcasing your products and services in the best way posssible.</p>    -->                         
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
                       <h2  class="text-center">We understand your business&apos; unique requirements.</h2>
                       <p class="text-center">IEA provides a broad range of customised interactive web based applications and development services.  Our creative design team will assess your business needs and target audience to design a customized website or app that perfectly works for you.</p>
                      </div> 
                      <div class="col-lg-4  pl-xl-5">
                            <h2  class="text-center">The following are the various web/app services offered at IEA.</h2>
                            <ul class="list-group">
                                <li class="list-group-item">Content management systems development</li>
                                <li class="list-group-item">Website design</li>
                                <li class="list-group-item">E-commerce website design & development</li>
                            </ul>
                           </div> 
                </div>                
              </div>
</section>
<!--================ End of section =================-->

    <!--================ Start of section =================-->
    <section class="section-margin" >
            <div class="container-fluid">
                    <div class="row justify-content-center" style="background-color:#0603ac; ">
                        <div class="col-lg-12  pl-xl-5">
                           <h3  style="color: #fff"  class="text-center">Our websites and applications:</h3>
                           <div class="d-lg-flex justify-content-between" >
                                <div class="card-feature mb-5 mb-lg-0">
                                  <div class="feature-icon" >
                                    <i  style="color: yellow" class="flaticon-prize"></i>
                                  </div> 
                                  <h3 style="color: #fff">Use the latest web standards.</h3>
                                  <p style="color: #fff">In the right applications, we believe it can really work and can save your organisation costs and improve performance. We specialise in instructional design and content development. </p>
                                </div>
                        
                                <div class="card-feature mb-5 mb-lg-0">
                                  <div class="feature-icon">
                                    <i style="color: yellow" class="flaticon-prize"></i>
                                  </div>
                                  <h3 style="color: #fff">Provide simple and intuitive design</h3>
                                  <p style="color: #fff">Sometimes e-learning on it's own won't be the answer. If we think this is the case, we'll tell you, and probably suggest a blended solution with face-to-face elements.</p>
                                </div>
                        
                                <div class="card-feature mb-5 mb-lg-0">
                                  <div class="feature-icon">
                                    <i style="color: yellow" class="flaticon-prize"></i>
                                  </div>
                                  <h3 style="color: #fff">Are secure and cost-effective.</h3>
                                  <p style="color: #fff">We have an experienced content development team comprising of animators, designers, programmers and testers who work in collaboration to ensure we deliver secure and affordable content.</p>
                                </div>

                                <div class="card-feature mb-5 mb-lg-0">
                                        <div class="feature-icon">
                                          <i style="color: yellow" class="flaticon-prize"></i>
                                        </div>
                                        <h3 style="color: #fff">Are responsive.</h3>
                                        <p style="color: #fff">We develop responsive content that can comfortably fit in any device while displaying the learning material in the best way attainable. Regardless of the platform used to access the content, it will adapt to it.</p>
                                      </div>

                              </div>
                          </div>
                           
                    </div>                
                  </div>
    </section>
    <!--================ End of section =================-->

    
@endsection