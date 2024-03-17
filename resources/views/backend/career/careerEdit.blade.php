<?php
use App\Models\PageElement;
?>

@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Career info Edit</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Career</li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Career Information Update</h5>
  
                        <form method="POST" action="{{route('career.update',$career->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf
                            <div class="row mb-3">
                            
                            <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
        
                                
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-lg12 col-12 col-sm-12">
                                        <div class="form-group pb-3">
                                            <label for="">Job Title</label>
                                            <input type="text" name="title" id="" class="form-control mt-2" value="{{$career->title}}" required>
                                            <div class="invalid-feedback">Please input your job title</div>
                                            @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="">Job Information</label>
                                            <textarea  id="editor" class=" form-control mt-2" name="info_content"  cols="5" rows="5" required>
                                                {!! $career->textContent!!}
                                            </textarea>
                                            <div class="invalid-feedback">Please input your job info</div>
                                            @error('info_content')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="submit_button_align" style="text-align: right;">
                                  <button type="submit" class="btn btn-success btn-lg">Update</button>
                                </div>        
                            </div>
                            
                        </div>
        
        
                        </form>
  
              </div>
            </div>
  
          </div>
    </div>



  
  </section>
    

<script>
$(document).ready(function(){
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
});

</script>

@endsection