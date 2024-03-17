<?php
use App\Models\Product;
use App\Models\Career;
use App\Models\PageElement;
$products= Product::all();
$careers= Career::where('status',1)->get();
$clients= PageElement::where('type','=',2)->first();
$contentArray =json_decode($clients->content, true); 
$client =$contentArray['contentImage'];
$siteInfo =siteInfoData();

?>

@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
      <p class="alert alert-success text-center">Welcome To Our {{$siteInfo->name}} Website</p>
    </div>
  </section>
  <section class="section dashboard">
    <div class="row">
      <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size: 25px">Product Quantity</h5>

            <div class="text-center">
              
                <h6 style="font-size: 35px; font-weight: bold;">{{count($products)}}</h6>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size:25px">Active Job Post</h5>

            <div class="text-center">
              
                <h6 style="font-size: 35px; font-weight: bold;">{{count($careers)}}</h6>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xl-4 col-lg-4 col-12 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size: 25px">Clients</h5>

            <div class="text-center">
              
                <h6 style="font-size: 35px; font-weight: bold;">{{count($client)}}</h6>
            
            </div>
          </div>
        </div>
      </div>
      

    </div>
  </section>
    
@endsection