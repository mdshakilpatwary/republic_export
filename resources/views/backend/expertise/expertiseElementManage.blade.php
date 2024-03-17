@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Expertise Data Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Expertise</li>
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
                <h5 class="card-title">All Expertise Data </h5>
                <a href="{{route('expertise.element')}}" class="btn btn-sm btn-success">Add</a>
  
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
                                        <th>Title</th>
                                        <th>Text Info</th>
                                        <th>Image</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($expertises)>0)
                                   @foreach($expertises as $expertise)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$expertise->title}}</td>
                                       <td>{!!$expertise->text_content!!}</td>
                                       <td>
                                        <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="" title="uoihyuy" style="width: 120px; height: 60px;">
                                        </td>
                                       <td>
                                          @if($expertise->type == 1)
                                          Both
                                          @else
                                          Only Image
                                          @endif
                                       </td>
                                       <td>
                                        @if($expertise->status == 1)
                                        <a href="{{route('expertise.element.status',$expertise->id)}}" class="btn btn-sm btn-outline-info">Active</a>
                                        @else
                                        <a href="{{route('expertise.element.status',$expertise->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       
                                       <td >
                                         <a href="{{route('expertise.element.delete',$expertise->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('expertise.element.edit',$expertise->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Expertise Element added here</td>
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