<?php
use App\Models\CommonHeaderBanner;
$pageTitle ='About';
$header_banner = '';

?>
@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','about')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','about')->first();
    $header_banner = $headerData->b_image;
  
  @endphp
@endif

       <div class="header" style="{{ $header_banner != '' ? 'background-image: url(' . asset('uploads/banner/'.$header_banner) . ');' : 'background:#095053; min-height:100px !important;' }}">
        <div class="bg-color" style="{{ $header_banner != '' ? '' : 'min-height:100px !important;' }}">
          <!-- Header part start-->
          @include('frontend.includes.header')
          <!-- Header part end-->
        @if(CommonHeaderBanner::where('type','about')->first())
          <div class="wrapper">
            <div class="container">
              <div class="row">
                <div class="banner-info text-center wow fadeIn delay-05s">
                  <h2 class="bnr-sub-title">{{$headerData->b_title}}<br>
                    @if($headerData->b_subTitle !='')
                    <span style=""> {{$headerData->b_subTitle}}</span>
                    @endif
                  </h2>
                  @if($headerData->b_textContent !='')
                  <p style=""> {{$headerData->b_textContent}}</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
         @endif 
        </div>
      </div>
    @if(CommonHeaderBanner::where('type','about')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->

      <!---->
<!-- about info start -->
<section id="about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="about-info-img">
                    <img src="{{asset('frontend')}}/img/LEBARONS-07.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="about-info-content">
                    <h3>OUR STORY</h3>
                    <p>
                        In the early 2000s, Laure and Gilles, a young French couple, fell in love with Bangladesh. In 2000, they decided to create their own company to promote 'Made in Bangladesh' products in France, and thus, Crossline was born.
                        <br>
                        Twenty-two years later, we have become one of the leading exporters of Asian-made garments to Europe. In 2016, we welcomed prestigious financial partners, such as BPI and Unexo, to join our adventure and support our growth.
                        <br>
                        Our success today is the result of a harmonious blend of our extensive experience, the talent and expertise of our teams and our innovative spirit.
                        <br>
                        Our success today is the result of a harmonious blend of our extensive experience, the talent and expertise of our teams and our innovative spirit.
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- about info end -->
<!-- about gallery image start -->
<section id="about-info-gallery">
    <div class="container">
        <div class="about-info-gallery-photo">
            <div class="photo">
              <img src="{{asset('frontend')}}/img/ABOUTUS-06V.jpg">
            </div>
            <div class="photo">
              <img src="{{asset('frontend')}}/img/ABOUTUS-06V.jpg">
            </div>
            <div class="photo">
                <img src="{{asset('frontend')}}/img/ABOUTUS-05V.jpg">
            </div>
            <div class="photo">
                <img src="{{asset('frontend')}}/img/ABOUTUS-05V.jpg">
            </div>
            <div class="photo">
                <img src="{{asset('frontend')}}/img/ABOUTUS-02V.jpg">
            </div>
            <div class="photo">
                <img src="{{asset('frontend')}}/img/ABOUTUS-02V.jpg">
            </div>
          </div>
    </div>
</section>
<!-- about gallery image end -->
<!-- about info service image start -->
<section id="about-service" style="background-image: url(img/GRAPHIC-04.png); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="about-service-heading">
                    <h3>HOW WE OPERATE</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-6 col-sm-6">
                <div class="about-service-item">
                    <div class="about-service-icon-img">
                        <img src="{{asset('frontend')}}/img/GRAPHIC-08.png" alt="">
                    </div>
                    <h3>SPAIN - BARCELONA</h3>
                    <ul>
                        <li>SHOWROOM</li>
                        <li>DESIGN</li>
                        <li>PATTERN MAKER</li>
                        <li>PATTERN MAKER</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-6 col-sm-6">
                <div class="about-service-item">
                    <div class="about-service-icon-img">
                        <img src="{{asset('frontend')}}/img/GRAPHIC-09.png" alt="">
                    </div>
                    <h3>FRANCE - LISIEUX & LILLE</h3>
                    <ul>
                        <li>SHOWROOM</li>
                        <li>DESIGN</li>
                        <li>PATTERN MAKER</li>
                        <li>PATTERN MAKER</li>
                    </ul>
                </div>            
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-6 col-sm-6">
                <div class="about-service-item">
                    <div class="about-service-icon-img">
                        <img src="{{asset('frontend')}}/img/GRAPHIC-10.png" alt="">
                    </div>
                    <h3>BANGLADESH - DHAKA</h3>
                    <ul>
                        <li>SHOWROOM</li>
                        <li>DESIGN</li>
                        <li>PATTERN MAKER</li>
                        <li>PATTERN MAKER</li>
                    </ul>
                </div>            
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-6 col-sm-6">
                <div class="about-service-item">
                    <div class="about-service-icon-img">
                        <img src="{{asset('frontend')}}/img/GRAPHIC-11.png" alt="">
                    </div>
                    <h3>CHINA - SUZHOU</h3>
                    <ul>
                        <li>SHOWROOM</li>
                        <li>DESIGN</li>
                        <li>PATTERN MAKER</li>
                        <li>PATTERN MAKER</li>
                    </ul>
                </div>            
            </div>
          

        </div>
    </div>

</section>
<!-- about info service image end -->

  <!-- hero banne content -->
<section id="hero-banner" style="background-image: url({{asset('frontend')}}/img/FOOTER-03.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="hero-banner-content">
          <h3>Join the team !</h3>
          <p>Be inspired to achieve your full potential while contributing to our collective success and growth.</p>
          <div class="contact-btn">
            <a href="">Join us ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>

</section>
@endsection
{{-- 
<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script> --}}