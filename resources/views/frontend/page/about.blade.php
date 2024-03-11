<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
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
@if(PageElement::where('type','=',3)->first())
  @php
  $aboutElement = PageElement::where('type','=',3)->first();
  $contentArray =json_decode($aboutElement->content, true);                     
  @endphp
<section id="about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="about-info-img">
                    <img src="{{ asset('uploads/about/' . $aboutElement->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="about-info-content">
                    <h3>OUR STORY</h3>
                    <p>
                      {!!$contentArray['storyText']!!}
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
          @foreach($contentArray['contentImage'] as $key => $image)
            <div class="photo">
              <img src="{{ asset('uploads/about/' . $image) }}">
            </div>
          @endforeach
          
            
          </div>
    </div>
</section>
@else
<p class="text-center p-2">Not update about data</p>
@endif
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