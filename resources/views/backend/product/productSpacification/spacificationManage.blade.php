@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Product Spacification Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item ">Product</li>
        <li class="breadcrumb-item ">Spacification</li>
        <li class="breadcrumb-item active">Manage</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12 col-12 col-sm-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All Product Spacification </h5>
                <a href="{{route('product.spacific.element')}}" class="btn btn-sm btn-info">Add</a>
  
                <!-- Table with stripped rows -->
                    
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-12 colsm-12" style="width: 100%; overflow-x: scroll;">
                            <table class="table table datatable">
                                @php
                                $sl = 1;
                                @endphp
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>Product Name</th>
                                        <th>Spacification Title</th>
                                        <th>Accordin Text</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($specifics)>0)
                                   @foreach($specifics as $specific)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$specific->product->p_name}}</td>
                                       <td>{{$specific->title}}</td>
                                       <td>{!!$specific->textContent!!}</td>
                                       
                                       <td >
                                           <a href="{{route('product.spacific.edit',$specific->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                           <a href="{{route('product.spacific.delete',$specific->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Product added here</td>
                                   </tr>
                               @endif
        
                                </tbody>
                            </table>
                        </div>
                    </div>
             
  

                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
    </div>
  </section>
    
@endsection