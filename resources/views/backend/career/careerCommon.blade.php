<?php
use App\Models\PageElement;
?>

@extends('backend.master')
@section('style_link')
<style>

.ck.ck-button.ck-off.ck-file-dialog-button {
	display: none;
}
.ck.ck-button.ck-off.ck-dropdown__button {
	display: none;
}
</style>
@endsection
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Career Common Info</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Career</li>
        <li class="breadcrumb-item">Common</li>
        <li class="breadcrumb-item active">Update</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Career Common Information Update</h5>
  
                        <form method="POST" action="{{route('career.common.update',$careerCommon->type)}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf
                            <div class="row mb-3">
                            
                            <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
        
                                
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-lg12 col-12 col-sm-12">
                                        <div class="form-group pb-3">
                                            <label for="">Carrer Page Title</label>
                                            <input type="text" name="title" id="" class="form-control mt-2" value="{{$careerCommon->title}}" required>
                                            <div class="invalid-feedback">Please input your Page title</div>
                                            @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="">Career Content Text</label>
                                            <textarea  id="editor" class=" form-control mt-2" name="career_text"  cols="5" rows="5" required>
                                                {!! $careerCommon->career_text!!}
                                            </textarea>
                                            <div class="invalid-feedback">Please input your Career Text</div>
                                            @error('career_text')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="">Career Footer Content</label>
                                            <textarea  id="editor_2" class=" form-control mt-2" name="career_footer"  cols="5" rows="5" required>
                                                {!! $careerCommon->career_footer!!}
                                            </textarea>
                                            <div class="invalid-feedback">Please input your career footer</div>
                                            @error('career_footer')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="submit_button_align" style="text-align: right;">
                                  <button type="submit" class="btn btn-success btn-lg">Save</button>
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
    ClassicEditor.create(document.querySelector("#editor_2")).catch((error) => {
  console.error(error);
});
});

</script>

@endsection