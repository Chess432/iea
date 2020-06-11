@extends('layouts.app')

@section('content')
<!--================ Start of section =================-->
<section class="hero-banner hero-banner-sm" style="margin-bottom: 50px;">
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
            <div class="col-lg-6 pl-xl-5 about-page-cards">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">How we do it</h5>
                      <p class="card-text">We follow a collaborative approach starting from requirements gathering to course deployment. It helps us consistently deliver quality eLearning material and on time.</p>
                     
                    </div>
                  </div>
            </div>

            <div class="col-lg-6 pl-xl-5 about-page-cards">
                <div class="card">  
                    <div class="card-body">
                      <h5 class="card-title">Our Core Philosophy</h5>
                      <p class="card-text">We believe in creating outstanding learning experiences that actively engage the learner by blending the best of instructional design and visual design strategies.</p>
                     
                    </div>
                  </div>
            </div>

          </div>


        </div>
      </section>
<!--================ End of section =================-->

<!--================ End of section =================-->

<section class="section-margin-about" >
<div class="row">
  <div class="col-lg-12">
    <h2 style="text-align: center">The Development process</h2>
  </div>
</div>
</section>

<!--================ Start of section =================-->

<!--================ Start of section =================-->
<section class="section-margin" >
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 pl-xl-5">
                        <img src="{{ asset('images/discover.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
                      </div>
                  <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <h3 style="text-align: center">Discover</h3>
                    <ul  class="list-group">
                      <li class="list-group-item">In the discovery phase, we work with key stakeholders to have a clear understanding of your training needs, your learners, the learning content and the performance objectives.</li>
                      <li class="list-group-item">Based on this gathered information, we identify any problems and arrive at the best-suited learning solutions that work for you.</li>
                      <li class="list-group-item">During the discovery phase we also define: 
                        <ul  class="list-group">
                            <li class="list-group-item">Detailed design document</li>
                            <li class="list-group-item">Estimated project timelines</li>
                            <li class="list-group-item">Price options in a formal proposal</li>
                        </ul>
                      </li>
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
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <h3 style="text-align: center">Design</h3>
                    <ul  class="list-group">
                      <li class="list-group-item">In the design phase, we will initially develop a &lsquo;proof of concept&rsquo; for you. This will give you an idea of what the end product will look like. Once you accept the proof of concept and price estimates, we will begin storyboarding.</li>
                      <li class="list-group-item">Our talented Instructional Designers will script the storyboard and apply sound instructional strategies to effectively impart learning.</li>                      
                    </ul>
                  </div>
                <div class="col-lg-6 pl-xl-5">
                    <img src="{{ asset('images/design.jpg') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
                  </div>
              
              
            </div>
          </div>
</section>
<!--================ End of section =================-->


<!--================ Start of section =================-->
<section class="section-margin" >
    <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-xl-5">
                    <img src="{{ asset('images/develop.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
                  </div>

                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <h3 style="text-align: center">Develop</h3>
                    <ul  class="list-group">
                      <li class="list-group-item">The development phase is where our creative visual designers use their innovation and bring the storyboard to life. These professionals add a blend of visual and interactive treatment such as animations, graphics, scenarios, games and assessments to enhance the look and feel of the course.</li>
                      <li class="list-group-item">The developed course is then sent to our internal QA team for usability review and functionality issues. Based on their feedback, the course is tweaked, fixed and sent for your review and approval.</li>   
                      <li class="list-group-item">You review the course and advise us of any changes. We will implement the changes and send the final package back to you for your final review and sign off.</li>                     
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
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <h3 style="text-align: center">Deploy</h3>
                    <ul  class="list-group">
                      <li class="list-group-item">Once the course has been approved and signed off, we will work closely with you to ensure smooth deployment of the developed eLearning module via your selected LMS.</li>
                      <li class="list-group-item">If you don’t have an LMS then we can assist you with that too.</li>   
                      <li class="list-group-item">Finally, we have a project closure meeting to discuss the project&apos;s success.</li>                   
                    </ul>
                  </div>
                <div class="col-lg-6 pl-xl-5">
                    <img src="{{ asset('images/jjjjjjop.png') }}" alt="Interactive E-Learning Africa" class="img-fluid">  
                  </div>
              
              
            </div>
          </div>
</section>
<!--================ End of section =================-->

@endsection