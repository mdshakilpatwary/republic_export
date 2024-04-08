<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='Expertise';
$header_banner = '';
use App\Models\MenuName;

?>
@if(MenuName::where('status',1)->where('type',2)->first())

@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','expertise')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','expertise')->first();
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
        @if(CommonHeaderBanner::where('type','expertise')->first())
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
    @if(CommonHeaderBanner::where('type','expertise')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->
<!-- expertise element start  -->
@foreach($expertises as $key => $expertise)
<!---->
    @if($key % 4 == 0)
    
        @if($expertise->type == 2) 
        <!--our expertise graphic image banner section-->
        <section id="our_expertise_graphic_img_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 col-xl-12">
                        <h3>{{$expertise->title}}</h3>
                        <div class="our_expertise_graphic_img_banner">
                            <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        @else
        <!--our expartise info content 1-->
        <section id="our_expertise_info">
            <div class="row">
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                    <div class="our_expertise_info_content">
                        <h3>{{$expertise->title}}</h3>
                        <ul style="list-style: none; padding: 0;">
                            <li>{!!$expertise->text_content!!}</li>  
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                    <div class="our_expertise_info_img">
                        <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                    </div>
        
                </div>
            </div>
        </section>
        @endif
    
    @elseif($key % 3 == 0 )
    
        @if($expertise->type == 2) 
        <!--our expertise graphic image banner section-->
        <section id="our_expertise_graphic_img_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 col-xl-12">
                        <h3>{{$expertise->title}}</h3>
                        <div class="our_expertise_graphic_img_banner">
                            <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        @else
                <!-- our expertise info 03-->
            <section id="our_expertise_info" class="our_expertise_info-3" style="background:#095053;">
                <div class="row">
                    <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                        <div class="our_expertise_info_content " >
                            <h3 style="color: #fff;">{{$expertise->title}}</h3>
                            <ul style="list-style: none; padding: 0;">
                                <li>{!!$expertise->text_content!!}</li>  
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                        <div class="our_expertise_info_img">
                            <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                        </div>
            
                    </div>
                </div>
            </section>
        @endif

        <!---->
    @elseif($key % 2 == 0 )
    
        @if($expertise->type == 2) 
        <!--our expertise graphic image banner section-->
        <section id="our_expertise_graphic_img_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 col-xl-12">
                        <h3>{{$expertise->title}}</h3>
                        <div class="our_expertise_graphic_img_banner">
                            <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        @else
        <!--our expartise info content 2-->
        <section id="our_expertise_info-2">
            <div class="row">
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12" style="padding: 0;">
                    <div class="our_expertise_info_img-2">
                        <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                    </div>
        
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                    <div class="our_expertise_info_content-2">
                        <h3>{{$expertise->title}}</h3>
                        <ul style="list-style: none; padding: 0;">
                            <li>{!!$expertise->text_content!!}</li>  
                        </ul>
                        
                        {{-- <div class="contact-btn">
                            <a href="">Discover more about 3d ></a>
                        </div> --}}
                    </div>
                </div>
        
        
            </div>
        </section>
        @endif
    @else
    
        @if($expertise->type == 2) 
        <!--our expertise graphic image banner section-->
        <section id="our_expertise_graphic_img_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 col-xl-12">
                        <h3>{{$expertise->title}}</h3>
                        <div class="our_expertise_graphic_img_banner">
                            <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        @else
        <!--our expartise info content 2-->
        <section id="our_expertise_info-2">
            <div class="row">
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12" style="padding: 0;">
                    <div class="our_expertise_info_img-2">
                        <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
                    </div>
        
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 col-12-col-sm-12">
                    <div class="our_expertise_info_content-2">
                        <h3>{{$expertise->title}}</h3>
                        <ul style="list-style: none; padding: 0;">
                            <li>{!!$expertise->text_content!!}</li>  
                        </ul>
                        
                        {{-- <div class="contact-btn">
                            <a href="">Discover more about 3d ></a>
                        </div> --}}
                    </div>
                </div>
        
        
            </div>
        </section>
        @endif

    @endif
@endforeach


@endsection
@else

<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script>
@endif