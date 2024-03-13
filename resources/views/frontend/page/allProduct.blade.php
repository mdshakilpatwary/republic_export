<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='About';
$header_banner = '';

?>
@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','product')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','product')->first();
    $header_banner = $headerData->b_image;
  
  @endphp
@endif

       <div class="header" style="{{ $header_banner != '' ? 'background-image: url(' . asset('uploads/banner/'.$header_banner) . ');' : 'background:#095053; min-height:100px !important;' }}">
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
    <!--our products info 01 section start-->
    <section id="our_product_info">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                    <div class="row">
                      <div class="offset-md-1 col-12 col-md-11">
                        <div class="our_product_info_content ">
                          <h3>WOVEN PRODUCTS</h3>
                          <!-- accordin  -->
                          <div class="accordion" id="accordionExample">
                              
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_1">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                    Leadtime
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="product_according_1" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul>
                                          <li> 45 to 120 days</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_2">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
                                      Minimum Order Quantity (MOQ)
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="product_according_2" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul>
                                          <li>3000 pcs / Reference</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_3">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Product Group
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="product_according_3" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul>
                                          <li>Women / Men / Kids / Baby</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="product_according_4">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                      Category Split
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="product_according_4" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul>
                                          <li>Pants, Shirt, Jacket, Blouse, Dress</li>
                                          <li>Denim, Non-Denim, Woven & Lightweight Woven</li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- Accordin  -->
                          <div class="contact-btn">
                              <a href="">Discover More ></a>
                            </div>    
                      </div>
                      </div>
                      <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                        <div class="our_product_info_img " style="height: 500px !important; margin: 10px auto;">
                          <div class="image-width" style="height: 500px !important; width: 85%; margin: 10px auto;">
                            <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="max-height: 100% !important;">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                    <div class="our_product_info_img ">
                        <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                        <div class="our_product_info_img " style="height: 370px !important; margin: 0 auto;">
                            <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" >
                        </div>
                      </div>
                    </div>
                </div>
    
                <div class="row" style="padding: 0;  margin:30px 0;">
                  <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                    <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                        <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 550px;">
                        <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="width: 100%;">
                    </div>
                  </div>
                </div>
            </div>
        </div>
        {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    </section>
        <!--our products info 01 section end-->
        <!--our products info 02 section start-->
    <section id="our_product_info" class="our_product_info-2">
        <div class="container">
          <div class="row ">
    
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="row">
                    <div class="offset-md-1 col-12 col-md-11">
                        <div class="our_product_info_img ">
                            <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                        </div>
                        <div class="row mt-5">
                          <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                            <div class="our_product_info_img " style="height: 370px !important; margin: 0 auto;">
                                <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" >
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
                    <h3>WOVEN PRODUCTS</h3>
                    <!-- accordin  -->
                    <div class="accordion" id="accordionExample">
                        
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="product_according_6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                              Leadtime
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="product_according_6" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 45 to 120 days</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="product_according_7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                Minimum Order Quantity (MOQ)
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="product_according_7" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>3000 pcs / Reference</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="product_according_8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                Product Group
                            </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="product_according_8" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Women / Men / Kids / Baby</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="product_according_9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                Category Split
                            </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="product_according_9" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Pants, Shirt, Jacket, Blouse, Dress</li>
                                    <li>Denim, Non-Denim, Woven & Lightweight Woven</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- Accordin  -->
                    <div class="contact-btn">
                        <a href="">Discover More ></a>
                      </div>    
                </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                  <div class="our_product_info_img clearfix " style="height: 500px !important; margin: 10px auto;">
                    <div class="image-width" style="height: 500px !important; width: 95%; margin: 10px 0; float: right;">
                      <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="max-height: 100% !important;">
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
            <div class="row" style="padding: 0;  margin:30px 0;">
              <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                    <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                <div class="our_product_info_img " style="height: 550px;">
                    <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="width: 100%;">
                </div>
              </div>
            </div>
        </div>
        </div>
        {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    </section>
        <!--our products info 02 section end-->
        <!--our products info 03 section start-->
    <section id="our_product_info" class="our_product_info-3">
        <div class="container">
          <div class="row ">
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="row">
                  <div class="offset-md-1 col-12 col-md-11">
                    <div class="our_product_info_content">
                      <h3>WOVEN PRODUCTS</h3>
                      <!-- accordin  -->
                      <div class="accordion" id="accordionExample">
                          
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="product_according_10">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
                                Leadtime
                              </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="product_according_10" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <ul>
                                      <li> 45 to 120 days</li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="product_according_11">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                                  Minimum Order Quantity (MOQ)
                              </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="product_according_11" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <ul>
                                      <li>3000 pcs / Reference</li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="product_according_12">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseThree">
                                  Product Group
                              </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="product_according_12" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <ul>
                                      <li>Women / Men / Kids / Baby</li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="product_according_13">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThree">
                                  Category Split
                              </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="product_according_13" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <ul>
                                      <li>Pants, Shirt, Jacket, Blouse, Dress</li>
                                      <li>Denim, Non-Denim, Woven & Lightweight Woven</li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                      <!-- Accordin  -->
                      <div class="contact-btn">
                          <a href="">Discover More ></a>
                        </div>    
                  </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 500px !important; margin: 10px auto;">
                      <div class="image-width" style="height: 500px !important; width: 85%; margin: 10px auto;">
                        <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="max-height: 100% !important;">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                <div class="our_product_info_img ">
                    <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                </div>
                <div class="row mt-5">
                  <div class="col-md-12 col-lg-12 col-xl-12 col-12 col-sm-12">
                    <div class="our_product_info_img " style="height: 370px !important; margin: 0 auto;">
                        <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" >
                    </div>
                  </div>
                </div>
            </div>
    
            <div class="row" style="padding: 0;  margin:30px 0;">
              <div class="col-md-8 col-lg-8 col-xl-8 col-12 col-sm-12">
                <div class="our_product_info_img " style=" width: 89%; margin: 0 auto; height: 550px;">
                    <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="">
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-xl-4 col-12 col-sm-12">
                <div class="our_product_info_img " style="height: 550px;">
                    <img src="{{asset('frontend')}}/img/WOVEN-8.jpg" alt="" style="width: 100%;">
                </div>
              </div>
            </div>
        </div>
        </div>
        {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    </section>
        <!--our products info 03 section end-->

      <!--product element-->


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