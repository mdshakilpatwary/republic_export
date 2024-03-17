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
      <div class="col-md-4 col-xl-4 col-lg-4 col-6 col-sm-6">
        <div class="card">
          
        </div>
      </div>
      

    </div>
  </section>
    
@endsection