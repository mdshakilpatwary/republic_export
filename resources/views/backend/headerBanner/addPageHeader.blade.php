@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Header Add Info</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Header</li>
        <li class="breadcrumb-item ">Banner</li>
        <li class="breadcrumb-item active">Info</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Page Wise Header information</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('header.info.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="col-form-label">Select Page</label>
                            <select name="page_type" class="form-select" aria-label="Default select example">
                                <option disabled selected>-----Select-----</option>
                                <option value="home">home</option>
                                <option value="about">about</option>
                              </select>
                            @error('page_type')
                            <p class="text-danger">{{$message}}</p>
                            
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Banner Title</label>
                            <input type="text" class="form-control" name="b_title" value="{{old('b_title')}}">
                            @error('b_title')
                            <p class="text-danger">{{$message}}</p>           
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Sub Title <span style="color: #6b6868">(Optional)</span></label>
                            <input type="text" class="form-control" name="b_subTitle" value="{{old('b_subTitle')}}">
                            @error('b_subTitle')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Text content <span style="color: #6b6868">(Optional)</span></label>
                            <input type="text" class="form-control" name="b_textContent" value="{{old('b_textContent')}}">
                            @error('b_textContent')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Header Quote</label>
                            <input type="text" class="form-control" name="b_quote" value="{{old('b_quote')}}">
                            @error('b_quote')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Banner Image</label>
                            <img src="" alt="" class="change_image mb-2" style="width: 200px; height: 150px; display:block;">
                            <input class="form-control file_image" type="file" id="formFile" name="b_image" >
                            @error('b_image')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Insert</button>
                    </div>
                    
                  </div>

  
                </form>
                <!-- End header Form Elements -->
  
              </div>
            </div>
  
          </div>
    </div>
  </section>
    
@endsection