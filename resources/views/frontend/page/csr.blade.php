<?php
use App\Models\CommonHeaderBanner;
use App\Models\CsrPageElement;
$pageTitle ='Csr';
$header_banner = '';

?>
@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','csr')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','csr')->first();
    $header_banner = $headerData->b_image;
  
  @endphp
@endif

       <div class="header" style="{{ $header_banner != '' ? 'background-image: url(' . asset('uploads/banner/'.$header_banner) . ');' : 'background:#095053; min-height:100px !important;' }}">
        <div class="bg-color" style="{{ $header_banner != '' ? '' : 'min-height:100px !important;' }}">
          <!-- Header part start-->
          @include('frontend.includes.header')
          <!-- Header part end-->
        @if(CommonHeaderBanner::where('type','csr')->first())
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
    @if(CommonHeaderBanner::where('type','csr')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->
<!-- csr element start  -->
    <!--Csr content info start-->
@if(CsrPageElement::where('type','=',1)->first())
@php
  $csrCommon =CsrPageElement::where('type','=',1)->first()  ;
@endphp
    <section id="csr_info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-12 col-lg-12 col-12 col-sm-12">
                    <div class="csr_info_content">
                        <h3>{{$csrCommon->title}}</h3>
                        <p class="common_p">
                            {!!$csrCommon->text_content!!}
                        </p>
                    </div>
                </div>
                <div class="offset-md-2 offset-lg-2 offset-xl-2 col-md-8 col-xl-8 col-lg-8 col-12 col-sm-12">
                    <div class="csr_info_img">
                        <img src="{{asset('uploads/csr/'.$csrCommon->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    
    </section>
@endif
        <!--Csr content info end-->
        <!--Csr content feature start-->
@if(CsrPageElement::where('type','=',2)->first())
@php
    $csrraw =CsrPageElement::where('type','=',2)->first() ; 
    $titleRaw = json_decode($csrraw->title, true) ;
    $contentRaw = json_decode($csrraw->text_content, true) ;
@endphp
    @if($titleRaw[0][0] !='' || $titleRaw[0][1] !='' || $titleRaw[0][2] !='')
        <section id="csr_feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-12 col-sm-12">
                        <h3>Raw Materials</h3>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titleRaw[0][0]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentRaw[0][0]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titleRaw[0][1]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentRaw[0][1]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titleRaw[0][2]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentRaw[0][2]!!}                            
                            </ul>
        
                        </div>
                    </div>

        
                </div>
        
            </div>
        
        </section>
    @endif
@endif
        <!--Csr content feature end-->
        <!--Csr content feature 02 start-->
@if(CsrPageElement::where('type','=',3)->first())
@php
    $csrpre =CsrPageElement::where('type','=',3)->first() ; 
    $titlepre = json_decode($csrpre->title, true) ;
    $contentpre = json_decode($csrpre->text_content, true) ;
@endphp
    @if($titlepre[0][0] !='' || $titlepre[0][1] !='' || $titlepre[0][2] !='')

        <section id="csr_feature" class="csr_feature_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-12 col-sm-12">
                        <h3>PRE PRODUCTION</h3>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlepre[0][0]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentpre[0][0]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlepre[0][1]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentpre[0][1]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlepre[0][2]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentpre[0][2]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    {{-- <div class="col-md-12 col-xl-12 col-12 col-sm-12">
                        <div class="contact-btn text-center" >
                            <a href="">Discover More About 3D ></a>
                        </div>
                    </div> --}}
        
                </div>
        
            </div>
        
        </section>
    @endif
@endif
        <!--Csr content feature02 end-->
        <!--Csr content feature 03 start-->
@if(CsrPageElement::where('type','=',4)->first())
@php
    $csrp =CsrPageElement::where('type','=',4)->first() ; 
    $titlep = json_decode($csrp->title, true) ;
    $contentp = json_decode($csrp->text_content, true) ;
@endphp
    @if($titlep[0][0] !='' || $titlep[0][1] !='' || $titlep[0][2] !='')

        <section id="csr_feature" class="csr_feature_3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-12 col-sm-12">
                        <h3>PRODUCTION</h3>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlep[0][0]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentp[0][0]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlep[0][1]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentp[0][1]!!}                            
                            </ul>
        
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
                        <div class="csr_feature_item">
                            <h5>{{$titlep[0][2]}}</h5>
                            <ul style="list-style: none; padding: 0;">
                                {!!$contentp[0][2]!!}                            
                            </ul>
        
                        </div>
                    </div>
        
                </div>
        
            </div>
        
        </section>
    @endif 
@endif
        <!--Csr content feature03 end-->



@endsection
{{-- 
<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script> --}}