@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Product Image Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item ">Product</li>
        <li class="breadcrumb-item ">Image</li>
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
                <h5 class="card-title">All Product Image </h5>
                <a href="{{route('product.image.element')}}" class="btn btn-sm btn-info">Add</a>
  
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
                                        <th>Product Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($product_image)>0)
                                   @foreach($product_image as $product_img)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$product_img->product->p_name}}</td>
                                       <td>
                                           <img src="{{asset('uploads/product/'.$product_img->image)}}" alt="" title="uoihyuy" style="width: 120px; height: 60px;">
                                       </td>
                                       <td >
                                        Active
                                       </td>
                                       <td >
                                           <a href="{{route('product.image.delete',$product_img->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
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