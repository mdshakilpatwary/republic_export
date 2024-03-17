@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Header Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Header</li>
        <li class="breadcrumb-item ">Banner</li>
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
                <h5 class="card-title">All Header Banner </h5>
                <a href="{{route('header.info')}}" class="btn btn-sm btn-success">Add</a>
  
                <!-- Table with stripped rows -->
                    
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-12 colsm-12" style="width: 100%; overflow-x: scroll;">
                            <table class="table ">
                                @php
                                $sl = 1;
                                @endphp
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>Page name</th>
                                        <th>Banner Title</th>
                                        <th>Sub-Title</th>
                                        <th>Text-Content</th>
                                        <th>Banner image</th>
                                        <th>Quote</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($banner_datas)>0)
                                   @foreach($banner_datas as $banner_data)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$banner_data->type}}</td>
                                       <td>{{$banner_data->b_title}}</td>
                                       <td>{{$banner_data->b_subTitle}}</td>
                                       <td>{{$banner_data->b_textContent}}</td>
                                       <td>
                                           @if($banner_data->b_image != '')
                                           <img src="{{asset('uploads/banner/'.$banner_data->b_image)}}" alt="" title="uoihyuy" style="width: 120px; height: 60px;">
                                           @else 
                                           Not upload image 
                                           @endif
                                       </td>
                                       <td>{{$banner_data->b_quote}}</td>
                                       <td >
                                         <a href="{{route('header.info.delete',$banner_data->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('header.info.edit',$banner_data->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No data added here</td>
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