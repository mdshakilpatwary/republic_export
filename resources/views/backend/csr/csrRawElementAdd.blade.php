<?php
use App\Models\CsrPageElement;

?>

@extends('backend.master')

@section('style_link')
<style>

.ck.ck-button.ck-off.ck-file-dialog-button {
	display: none;
}
.ck.ck-button.ck-off.ck-dropdown__button {
  display: none !important;
}
</style>
@endsection
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Csr Raw Material</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Csr</li>
        <li class="breadcrumb-item">Raw</li>
        <li class="breadcrumb-item active">Meterial</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <!-- update form-->
              @if(CsrPageElement::where('type','=', 2)->first())
              @php
                $csr_raw=CsrPageElement::where('type','=', 2)->first();
                $title = json_decode($csr_raw->title, true) ;
                $content = json_decode($csr_raw->text_content, true) ;
                
              @endphp
              <div class="card-body">
                <h5 class="card-title">Csr Raw Material Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('csr.raw_material.update',$csr_raw->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">             
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" name="title[]" value="{{$title[0][0]}}">
                                    @error('title.0')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor-1">
                                        {{$content[0][0]}}
                                    </textarea>                            
                                    @error('text_content.0')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
                          </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title 02</label>
                                    <input type="text" class="form-control" name="title[]" value="{{$title[0][1]}}">
                                    @error('title.1')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content 02</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor-2">
                                        {{$content[0][1]}}
                                    </textarea>                            
                                    @error('text_content.1')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
                          </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title 03</label>
                                    <input type="text" class="form-control" name="title[]" value="{{$title[0][2]}}">
                                    @error('title')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content 03</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor">
                                        {{$content[0][2]}}
                                    </textarea>                            
                                    @error('text_content.2')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
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
                <h5 class="card-title">Csr Raw Material Add</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('csr.raw_material.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="col-md-12 col-lg-12 col-12 col-sm-12">             
                        
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" name="title[]" value="{{old('title.1')}}">
                                    @error('title.0')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor-1">
                                      {{old('text_content.1')}}
                                    </textarea>                            
                                    @error('text_content.0')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
                          </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title 02</label>
                                    <input type="text" class="form-control" name="title[]" value="{{old('title.2')}}">
                                    @error('title.1')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content 02</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor-2">
                                      {{old('text_content.2')}}
                                    </textarea>                            
                                    @error('text_content.1')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
                          </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Title 03</label>
                                    <input type="text" class="form-control" name="title[]" value="{{old('title.3')}}">
                                    @error('title')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="inputText" class="col-form-label">Text Content 03</label>
                                    <textarea class="form-control" cols="5" rows="5" name="text_content[]"  id="editor">
                                      {{old('text_content.3')}}
                                    </textarea>                            
                                    @error('text_content.2')
                                    <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                            </div>
                            <hr>
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
    ClassicEditor.create(document.querySelector("#editor-1")).catch((error) => {
  console.error(error);
});
    ClassicEditor.create(document.querySelector("#editor-2")).catch((error) => {
  console.error(error);
});

});

</script>
@endsection