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
                  <h2>Custom software development</h2>
                  <p >At Interactive E-Learning Africa Ltd, we develop software customised to the clients requirements. We are dedicated to build scalable and personalised software that meets the evolving business needs. We make it our ambition to discover better ways of doing things and maxising efficincies.</p>                             
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
              <div class="row align-items-center">
                  <div class="col-lg-4  pl-xl-5">
                  <img src="{{asset('images/IEA-LOGO.png')}}" alt="" class="img-fluid">
                       </div> 
                    <div class="col-lg-8  pl-xl-5">
                          <p class="text-center">How can we help you?</p>
                          <p class="text-justify">At IEA, we have created a number of cost-effective and efficient mobile learning solutions helping our clients stay competitive with a well-informed workforce.</p>
                          <p class="text-left">To optimize elearning impact, our eLearning experts:</p>
                         <ul class="list-group">
                           <li class="list-group-item">First, understand your mobile learning needs and the learning environment</li>
                           <li class="list-group-item">Based on design and technical considerations, they come up with user-friendly experiences</li>
                         </ul>
                         </div> 
                         
              </div>                
            </div>
</section>
<!--================ End of section =================-->


<!-- NEW SECTION FOR DOWNLOAD -->
<!--================ Start of section =================-->
    <section class="section-margin" >
      <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12  pl-xl-5">
                      <h3>Enlightenment Revision Kit</h3>
                      <p>We have a KCPE Revision Application to help your child adequately prepare for the Exams. The application mimics a real exam environment with additional features such as automated marking of exam, revision for questions, report analysis and more.</p>
                  <a href="../../downloads/Enlightenment.apk" class="btn btn-success" download="Enlightenment">Download APK</a>

                  <h3 class="mt-5">Pefa South B App</h3>
                      <p>Download the PEFA South B app.</p>
                  <a href="../../downloads/PefaSB.apk" class="btn btn-primary" download="PefaSB">Download APK</a>
                       </div> 
                     
                         
              </div>                
            </div>
</section>
<!--================ End of section =================-->

<!-- END OF NEW SECTION FOR DOWNLOAD -->

    <!--================ Start of section =================-->
    <section class="section-margin" >
        <div class="container-fluid">
                <div class="row align-items-center" style="background-color: #0D52B2">
                    <div class="col-lg-8  pl-xl-5">
                   <h2 class="text-left" style="color: #fff">What we offer</h2>
                   <p class="text-justify" style="color: #fff">At IEA, we offer a wide range of mobile learning solutions including</p>
                   <ul style="list-style-type:disc">
                     <li style="color: #fff">Native app development</li>
                     <li style="color: #fff">Migration of existing adobe flash based courses to HTML5</li>
                     <li style="color: #fff">Develop HTML5 based custom and rapid mobile content for mobile devices</li>
                   </ul>
                         </div>  
                         <div class="col-lg-4  pl-xl-5">
                            <img src="{{asset('images/IEA-LOGO.png')}}" alt="" class="img-fluid">
                                 </div>                            
                </div>                
              </div>
  </section>
  <!--================ End of section =================-->

      <!--================ Start of section =================-->
      <section class="section-margin" >
          <div class="container">
                  <div class="row">
                      <div class="col-lg-12  pl-xl-5 about-page-cards">
                     <h2 class="text-center">Available features in our mobile learning products</h2>
                     <p class="text-center">Our mobile learning scalable, adaptable and available on demand to meet the needs of the tech-based business environment.</p>
                     
                     <div class="row">
                        <div class="col-lg-4 pl-xl-5">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Multi-Device Learning</h5>
                                  <p class="card-text">Our courses are platform independent so that your learners can access the learning content anywhere, anytime and on any mobile device.</p>
                                 
                                </div>
                              </div>
                        </div>
            
                        <div class="col-lg-4 pl-xl-5 about-page-cards">
                            <div class="card">  
                                <div class="card-body">
                                  <h5 class="card-title">HTML5 competency</h5>
                                  <p class="card-text">Our mobile learning experts have outstanding programing expertise and leverage authoring tools for HTML5 output.</p>
                                 
                                </div>
                              </div>
                        </div>

                        <div class="col-lg-4 pl-xl-5 about-page-cards">
                            <div class="card">  
                                <div class="card-body">
                                  <h5 class="card-title">Responsive Learning</h5>
                                  <p class="card-text">Be it smartphone, iPad or tablet, our mobile-friendly eLearning courses are based on the principles of responsive design to provide an optimal viewing experience across all devices.</p>
                                 
                                </div>
                              </div>
                        </div>
            
                      </div>


                      <div class="row" style="padding-top: 10px;">
                          <div class="col-lg-6 pl-xl-5 about-page-cards">
                              <div class="card">  
                                  <div class="card-body">
                                    <h5 class="card-title">Interactive Design</h5>
                                    <p class="card-text">While designing courses, we focus on both interface design and instructional design. We embed multimedia elements such as animations, video clips, rich interactions, gaming techniques, media clips and scenarios to create an immersive learning experience.</p>
                                   
                                  </div>
                                </div>
                          </div>

                          <div class="col-lg-6 pl-xl-5 about-page-cards">
                              <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Bite-Sized Learning</h5>
                                    <p class="card-text">Relevant content is chunked into bite-size pieces/micro-learning modules to avoid information overload. These micro-learning modules can be completed in 5-10 minutes. Our bite-size approach helps the learners to recall, retain and reinforce the information.</p>
                                   
                                  </div>
                                </div>
                          </div>   
                        </div>


                           </div>                                                       
                  </div>                
                </div>
    </section>
    <!--================ End of section =================-->

@endsection