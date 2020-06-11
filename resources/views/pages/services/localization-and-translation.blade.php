@extends('layouts.app')
@section('content')
<!--================ Start of section =================-->
<section class="hero-banner-localization hero-banner-sm-localization" style="margin-bottom: 50px;">
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
                      <h2>Localization and translation</h2>
                      <p class="text-justify">eLearning is more effective when delivered in the learner’s native language. As part of business expansion, companies need to reach out to their audience and deliver the training in the language and culture they understand best. To achieve this, we work with you to recreate and transform your learning content to suit your business.</p>
                      <p class="text-justify"><em>With a wide range of experience in translation and localisation of content, IEA help you create diverse multilingual solutions to meet your specific training needs and increase your brand integrity within a reasonable budget.</em></p>                 
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
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center">We will work with you to design blended learning solutions such as</p>
      </div>
    </div>
    
    <div class="d-lg-flex justify-content-between">
      <div class="card-feature mb-5 mb-lg-0">
        <div class="feature-icon">
          <i class="flaticon-prize"></i>
        </div>
        <h3>Voice over narration.</h3>          
      </div>
      <div class="card-feature mb-5 mb-lg-0">
        <div class="feature-icon">
          <i class="flaticon-prize"></i>
        </div>
          <h3>Multimedia localization.</h3>          
      </div>

      <div class="card-feature mb-5 mb-lg-0">
        <div class="feature-icon">
          <i class="flaticon-prize"></i>
        </div>
            <h3>content translation.</h3>          
      </div>

          <div class="card-feature mb-5 mb-lg-0">
                <div class="feature-icon">
                  <i class="flaticon-prize"></i>
                </div>
                <h3>Audio-video intergration.</h3>          
              </div>

        <div class="card-feature mb-5 mb-lg-0">
            <div class="feature-icon">
              <i class="flaticon-prize"></i>
            </div>
            <h3>Subtitling.</h3>          
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
        <p class="text-justify">Our translation specialists are skilled at creating accurate and culturally specific translations of your learning content. This ensures the maximum reach and impact of your training and the message is conveyed consistently.</p>
      <img src="{{asset('images/Logo.png')}}" alt="Interactive eLearning Africa" class="img-fluid">
      </div>
      <div class="col-lg-6">
        <h2 class="text-center">Our eLearning Localisation Workflow</h2>
        <ul class="list-group">
          <li class="list-group-item">Content localization
            <ul class="list-group">
              <li class="list-group-item">Our graphics team ensures the effective localisation of graphics, themes and multimedia elements to bring a desired local &ldquo;look-and-feel&rdquo;</li>
            </ul>
          </li>
          <li class="list-group-item">Analysis
              <ul class="list-group">
                <li class="list-group-item">Content is analysed to neutralise cultural, linguistic and contextual discrepancies</li>
              </ul>
          </li>
          <li class="list-group-item">Audio Recording
            <ul class="list-group">
              <li class="list-group-item">We provide professional studio voice-over recording services with the help of native voice-over artists</li>
            </ul>
          </li>
        </ul>
        </div>
    </div>               
  </div>
</section>
<!--================ End of section =================-->
@endsection