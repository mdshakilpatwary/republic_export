<?php
$pageTitle ='Single Product';

?>
@if($product != '')
@extends('frontend.master')
@section('mainContent')
<!--HEADER-->

<div class="header" style="background-image:  url('{{asset('uploads/product/'.$product->p_banner)}}');">
    <div class="bg-color">
        {{-- header  --}}
        @include('frontend.includes.header')
        <div class="wrapper">
            <div class="container">
              <div class="row">
                <div class="banner-info text-center wow fadeIn delay-05s">
                  <h2 class="bnr-sub-title">{{$product->p_name}} Products.</h2>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
  
      <!--/ HEADER-->

      <!---->


    <!--single products info section start-->
    <section id="our_product_info" class="our_product_info-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
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
                                    <ul style="list-style: none;">
                                        <li>{!!$spacific->textContent!!}</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- Accordin  -->
                          
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                    <div class="single_product_info_content ">
                        <p>
                            {!!$product->p_description!!}
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
        <!--our products info 03 section end-->
    <section id="single_product_page_img">
        <div class="container">
            <div class="row g-5">
                @foreach($images as $image)
                    <div class="col-md-4 col-6 col-sm-6 col-xl-3 col-lg-3">
                        <div class="" style="width: 100%">
                          <img src="{{asset('uploads/product/'.$image->image)}}" style="width: 100%">
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <p> All Printed designs created by our studio. All products manufactured by Crossline. </p> --}}
    
        </div>
    
    </section>

@endsection
@else
<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script>
@endif