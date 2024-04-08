<?php
use App\Models\CommonHeaderBanner;
$pageTitle ='Contact Us';
$header_banner = '';
use App\Models\MenuName;

?>
@if(MenuName::where('status',1)->where('type',5)->first())

@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','contact')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','contact')->first();
    $header_banner = $headerData->b_image;
  
  @endphp
@endif

        <!--HEADER-->
      <div class="header" style="{{ $header_banner != '' ? '' : 'background:#095053; min-height:100px !important;' }}">
        <img class="banner_image" src="{{ $header_banner != '' ? asset('uploads/banner/'.$header_banner) : '' }}" alt="">
        <div class="bg-color" style="{{ $header_banner != '' ? '' : 'min-height:100px !important;' }}">
          <!-- Header part start-->
          @include('frontend.includes.header')
          <!-- Header part end-->
        @if(CommonHeaderBanner::where('type','contact')->first())
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
    @if(CommonHeaderBanner::where('type','contact')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->




@endsection
@else

<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script>
@endif