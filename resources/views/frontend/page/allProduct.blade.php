<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='Our Product';
$header_banner = '';
use App\Models\MenuName;

?>
@if(MenuName::where('status',1)->where('type',3)->first())

@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','product')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','product')->first();
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
        @if(CommonHeaderBanner::where('type','product')->first())
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
    @if(CommonHeaderBanner::where('type','product')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->

      <!--product element-->

    @foreach($products as $key => $product )
    <!--our products info 01 section start-->
   
    @if($key % 3 == 0)

    @php
    $spacifics = App\Models\ProductSpecification::where('product_id','=',$product->id)->get();
    @endphp
    
    <section id="our_product_info">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                    <div class="row">
                      <div class="offset-md-1 col-12 col-md-11">
                        <div class="our_product_info_content ">
                          <h3>{{$product->p_name}} PRODUCTS</h3>
                          <!-- accordin  -->
                          <div class="accordion" id="accordionExample">
                              @foreach($spacifics as $spacific)
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_{{$spacific->id}}">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$spacific->id}}" aria-expanded="false" aria-controls="collapseTwo">
                                    {{$spacific->title}}
                                  </button>
                                </h2>
                                <div id="collapse{{$spacific->id}}" class="accordion-collapse collapse" aria-labelledby="product_according_{{$spacific->id}}" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul style="list-style: none">
                                          <li> {!! $spacific->textContent!!}</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                          </div>
                          <!-- Accordin  -->
                          <div class="contact-btn">
                              <a href="{{route('product.single',$product->p_name)}}">Discover More ></a>
                            </div>    
                      </div>
                      </div>
                      <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                        <div class="our_product_info_img " style="height: 500px ; margin: 10px auto;">
                          <div class="image-width" style="height: 500px ; width: 85%; margin: 10px auto;">
                            <img src="{{asset('uploads/product/'.$product->image_2)}}" alt="" style="max-height: 100% !important;">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                    <div class="our_product_info_img ">
                        <img src="{{asset('uploads/product/'.$product->image_1)}}" alt="">
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                        <div class="our_product_info_img " style="height: 370px ; margin: 0 auto;">
                            <img src="{{asset('uploads/product/'.$product->image_3)}}" alt="" >
                        </div>
                      </div>
                    </div>
                </div>
    
                <div class="row" style="padding: 0;  margin:30px 0;">
                  <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                    <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                        <img src="{{asset('uploads/product/'.$product->image_4)}}" alt="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 550px;">
                        <img src="{{asset('uploads/product/'.$product->image_5)}}" alt="" style="width: 100%;">
                    </div>
                  </div>
                </div>
            </div>
        </div>
        {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    </section>
    <!--our products info 01 section end-->
    @elseif($key % 2 == 0)
    @php
    $spacifics = App\Models\ProductSpecification::where('product_id','=',$product->id)->get();
    @endphp
    <!--our products info 03 section start-->
    <section id="our_product_info" class="our_product_info-3">
        <div class="container">
          <div class="row ">
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="row">
                  <div class="offset-md-1 col-12 col-md-11">
                    <div class="our_product_info_content">
                      <h3>{{$product->p_name}} PRODUCTS</h3>
                      <!-- accordin  -->
                      <div class="accordion" id="accordionExample">
                          
                        @foreach($spacifics as $spacific)
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="product_according_{{$spacific->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$spacific->id}}" aria-expanded="false" aria-controls="collapseTwo">
                              {{$spacific->title}}
                            </button>
                          </h2>
                          <div id="collapse{{$spacific->id}}" class="accordion-collapse collapse" aria-labelledby="product_according_{{$spacific->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul style="list-style: none" class="">
                                    <li> {!! $spacific->textContent!!}</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      <!-- Accordin  -->
                      <div class="contact-btn">
                          <a href="{{route('product.single',$product->p_name)}}">Discover More ></a>
                        </div>    
                  </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 500px ; margin: 10px auto;">
                      <div class="image-width" style="height: 500px ; width: 85%; margin: 10px auto;">
                        <img src="{{asset('uploads/product/'.$product->image_1)}}" alt="" style="max-height: 100% !important;">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="our_product_info_img ">
                    <img src="{{asset('uploads/product/'.$product->image_2)}}" alt="">
                </div>
                <div class="row mt-5">
                  <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 370px ; margin: 0 auto;">
                        <img src="{{asset('uploads/product/'.$product->image_3)}}" alt="" >
                    </div>
                  </div>
                </div>
            </div>
    
            <div class="row" style="padding: 0;  margin:30px 0;">
              <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                    <img src="{{asset('uploads/product/'.$product->image_4)}}" alt="">
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                <div class="our_product_info_img " style="height: 550px;">
                    <img src="{{asset('uploads/product/'.$product->image_5)}}" alt="" style="width: 100%;">
                </div>
              </div>
            </div>
        </div>
        </div>
        {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    </section>
        <!--our products info 03 section end-->

    @else
    @php
    $spacifics = App\Models\ProductSpecification::where('product_id','=',$product->id)->get();
    @endphp
            <!--our products info 02 section start-->
            <section id="our_product_info" class="our_product_info-2">
                <div class="container">
                  <div class="row ">
            
                    <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                        <div class="row">
                            <div class="offset-md-1 col-12 col-md-11">
                                <div class="our_product_info_img ">
                                    <img src="{{asset('uploads/product/'.$product->image_1)}}" alt="">
                                </div>
                                <div class="row mt-5">
                                  <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                                    <div class="our_product_info_img " style="height: 370px ; margin: 0 auto;">
                                        <img src="{{asset('uploads/product/'.$product->image_2)}}" alt="" >
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                      <div class="row">
                        <div class="col-12 col-md-12">
                          <div class="our_product_info_content " style="margin-left: 35px">
                            <h3>{{$product->p_name}} PRODUCTS</h3>
                            <!-- accordin  -->
                            <div class="accordion" id="accordionExample">
                                
                                @foreach($spacifics as $spacific)
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_{{$spacific->id}}">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$spacific->id}}" aria-expanded="false" aria-controls="collapseTwo">
                                    {{$spacific->title}}
                                  </button>
                                </h2>
                                <div id="collapse{{$spacific->id}}" class="accordion-collapse collapse" aria-labelledby="product_according_{{$spacific->id}}" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul style="list-style: none">
                                          <li> {!! $spacific->textContent!!}</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                            <!-- Accordin  -->
                            <div class="contact-btn">
                                <a href="{{route('product.single',$product->p_name)}}">Discover More ></a>
                              </div>    
                        </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                          <div class="our_product_info_img clearfix " style="height: 500px ; margin: 10px auto;">
                            <div class="image-width" style="height: 500px ; width: 95%; margin: 10px 0; float: right;">
                              <img src="{{asset('uploads/product/'.$product->image_3)}}" alt="" style="max-height: 100% !important;">
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            
                    <div class="row" style="padding: 0;  margin:30px 0;">
                      <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                        <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                            <img src="{{asset('uploads/product/'.$product->image_4)}}" alt="">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                        <div class="our_product_info_img " style="height: 550px;">
                            <img src="{{asset('uploads/product/'.$product->image_5)}}" alt="" style="width: 100%;">
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
            </section>
                <!--our products info 02 section end-->
    @endif

    @endforeach


      <!--product element-->



@endsection
@else

<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script>
@endif