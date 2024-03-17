<?php
use App\Models\CsrPageElement;

?>

@extends('backend.master')

@section('style_link')
<style>

.ck.ck-button.ck-off.ck-file-dialog-button {
	display: none;
}
</style>
@endsection
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Csr Element</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Csr</li>
        <li class="breadcrumb-item">Common</li>
        <li class="breadcrumb-item active">Element</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <!-- update form-->
              @if(CsrPageElement::where('type','=', 1)->first())
              @php
                $common=CsrPageElement::where('type','=', 1)->first();  
              @endphp
              <div class="card-body">
                <h5 class="card-title">Csr Common Element Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('csr.common.update',$common->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                                   
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$common->title}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Text Content</label>
                            <textarea class="form-control" cols="5" rows="5" name="text_content"  id="editor">
                              {!!$common->text_content!!}
                            </textarea>                            
                            @error('text_content')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label for="inputNumber" class=" col-form-label">Banner Image <span style="color: #6b6868">(resolution 1200x600 )</span></label>
                          <img src="{{asset('uploads/csr/'.$common->image)}}" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                          <input class="form-control p_file_image" type="file" id="formFile" name="image" >
                          @error('image')
                          <p class="text-danger">{{$message}}</p> 
                          @enderror
                        </div>
      
                        <div class="submit_button_align" style="text-align: right;">
                          <button type="submit" class="btn btn-success btn-lg">Save</button>
                        </div>
                    </div>
                    
                  </div>

  
                </form>
                <!-- End header Form Elements -->
  
              </div>


              <!-- add form-->
              @else
              <div class="card-body">
                <h5 class="card-title">Csr Common Element Add</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('csr.common.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">             
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Text Content</label>
                            <textarea class="form-control" cols="5" rows="5" name="text_content"  id="editor">
                              {{old('text_content')}}
                            </textarea>                            
                            @error('text_content')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label for="inputNumber" class=" col-form-label">Banner Image <span style="color: #6b6868">(resolution 1200x600 )</span></label>
                          <img src="" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                          <input class="form-control p_file_image" type="file" id="formFile" name="image" >
                          @error('image')
                          <p class="text-danger">{{$message}}</p> 
                          @enderror
                        </div>
      
                        <div class="submit_button_align" style="text-align: right;">
                          <button type="submit" class="btn btn-success btn-lg">Add</button>
                        </div>
                    </div>
                    
                  </div>

  
                </form>
                <!-- End header Form Elements -->
  
              </div>
              @endif

            </div>
  
          </div>
    </div>
  </section>
  
@endsection
@section('script_link')
<script>
  //  onchange image file part
$(document).ready(function(){
$('.p_file_image').change('.p_change_image',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image').files[0];
  reader.onload =function(e){
      $(".p_change_image").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});



});

// editor 
$(document).ready(function(){
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
});

</script>
@endsection