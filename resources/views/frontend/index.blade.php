<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='Home';

$header_banner = '';
?>
@extends('frontend.master')

@section('mainContent')
  @if(CommonHeaderBanner::where('type','home')->first())
      @php
        $headerData =CommonHeaderBanner::where('type','home')->first();
        $header_banner = $headerData->b_image;
      
      @endphp
  @endif
       <!--HEADER-->
       <div class="header" style="{{ $header_banner != '' ? 'background-image: url(' . asset('uploads/banner/'.$header_banner) . ');' : 'background:#095053; min-height:100px !important;' }}">
        <div class="bg-color" style="{{ $header_banner != '' ? '' : 'min-height:100px !important;' }}">
          <!-- Header part start-->
          @include('frontend.includes.header')
          <!-- Header part end-->
          @if(CommonHeaderBanner::where('type','home')->first())
          <div class="wrapper">
            <div class="container">
              <div class="row">
                <div class="banner-info text-center wow fadeIn delay-05s">
                  <h2 class="bnr-sub-title">{{$headerData->b_title}}<br>
                    @if($headerData->b_subTitle !='')
                    <span style=""> {{$headerData->b_subTitle}}</span>
                    @endif
                  </h2>
                  @if($headerData->b_textContent != '')
                  <p style=""> {{$headerData->b_textContent}}</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
      @if(CommonHeaderBanner::where('type','home')->first())
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
      <section id="feature" class="section-padding wow fadeIn delay-05s" style="background-image: url({{asset('frontend')}}/img/GRAPHIC-04.png); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 col-12">
              <h4 class="industrial-content-heading">INDUSTRIAL STRENGTHS</h4>
            </div>
          </div>
          <!--Industrial element start-->
          @if(PageElement::where('type','=',1)->first())
          @php
          $elements = PageElement::where('type','=',1)->first();
          $contentArray =json_decode($elements->content, true);                     
          @endphp
          <div class="row">
            <div class="offset-md-1 col-12 col-md-10 col-xl-10 col-sm-12">
              <div class="row">
                @foreach ($contentArray['contentTitle'] as $key => $title)

              
                <div class="col-md-3 col-sm-6 col-6 col-sm-6 col-xl-2">
                  <div class="wrap-item text-center">
                    <div class="item-img">
                      <img src="{{ asset('uploads/element/' . $contentArray['contentImage'][$key]) }}">
                    </div>
                    <h3 class="pad-bt15">{{ $title }}</h3>
                    <p>{{ $contentArray['contentText'][$key]}}</p>
                  </div>
                </div>
               @endforeach


              </div>

            </div>
            
            
            
  
          </div>
          @else
          <p class="text-center">Industrial Element Not Updated</p>
          @endif
        </div>
      </section>
      <!---->
      <!---->
      <!---->
      <section id="category" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
          <div class="row ">
            @if($products)
            @foreach($products as $product)
              <div class="col-md-4 col-6 col-sm-6 col-xs-12 mb-3">
                <div class="category-sec">
                  <div class="category-img">
                    <a href="{{route('product.single',$product->p_name)}}">
                      <img src="{{asset('uploads/product/'.$product->p_image)}}" class="img-responsive">
                    </a>
                  </div>
                  <div class="category-info">
                    <h2>{{$product->p_name}}</h2>
                    <p>{{$product->p_headline}}</p>
                    <a href="{{route('product.single',$product->p_name)}}" class="read-more">Discover ></a>
                  </div>
                </div>
              </div>
            @endforeach
            @else
            <p class="text-center">No product uploaded</p>
            @endif
          </div>
        </div>
      </section>
      <!---->
  <section id="client-logo">
    <div class="container">
      <div class="clint-logo-title">
        <h3>OUR CLIENTS</h3>
      </div>
      <!--client element start-->
      @if(PageElement::where('type','=',2)->first())
        @php
          $elements = PageElement::where('type','=',2)->first();
          $contentArray =json_decode($elements->content, true); 
        @endphp
        <div class="client-logo-item client-logo-slider">

        @foreach ($contentArray['contentTitle'] as $key => $title)

          <img src="{{ asset('uploads/element/' . $contentArray['contentImage'][$key]) }}" alt="{{ $contentArray['contentText'][$key] }}" title="{{$title}}">      
      

          
        @endforeach
        </div>
      @else
      <p class="text-center">Client element not Updated</p>
      @endif
      <div class="cliet-slider-btn">
        <span class="prev-btn"><i class="fa fa-arrow-left-long"></i></span>
        <span class="next-btn"><i class="fa fa-arrow-right-long"></i></span>
      </div>
  
    </div>
  </section>
      <!---->
      <!---->
    <!-- hero banne content -->
    
  {{-- <section id="hero-banner" style="background-image: url({{asset('frontend')}}/img/talents.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
          <div class="hero-banner-content">
            <h3> Join the adventure with us ! </h3>
            <p>Our goal is to enhance the fashion industry, and all we need is you.</p>
            <div class="contact-btn">
              <a href="work_together.html">Join us ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  
  </section>  --}}
@endsection
