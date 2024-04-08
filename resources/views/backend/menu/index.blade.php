@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Manu Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Menu</li>
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
                <h5 class="card-title">All Menu </h5>  
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
                                        <th>Menu name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($menus)>0)
                                   @foreach($menus as $menu)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$menu->menuName}}</td>
                                       <td >
                                        @if($menu->status == 1)
                                        <a href="{{route('header.menu.status',$menu->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('header.menu.status',$menu->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>

                                       <td >
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$menu->id}}">Edit</button>                                       
                                        </td>
                                   </tr>


                                   <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal_{{$menu->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Menu Name Edit & Update</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('menu.update',$menu->id)}}" method="POST" >
       @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">Menu Name</label>
            <input type="text" class="form-control" name="name" value="{{$menu->menuName}}">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        </div>    

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
      </div>
      
    </div>
  </div>
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