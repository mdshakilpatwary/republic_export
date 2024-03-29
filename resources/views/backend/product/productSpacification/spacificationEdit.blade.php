@extends('backend.master')

@section('style_link')
<style>
  .ck.ck-button.ck-off.ck-dropdown__button {
  display: none !important;
}
.ck.ck-button.ck-off.ck-file-dialog-button {
	display: none;
}
</style>
@endsection
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Product Spacifications Update</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Product</li>
        <li class="breadcrumb-item">Spacification</li>
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
                <h5 class="card-title">Product Spacification Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('product.spacific.update',$specific->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="col-form-label">Product</label>
                            <input type="text" class="form-control" name="" id="" value="{{$specific->product->p_name}}" disabled>
                            @error('product_name')
                            <p class="text-danger">{{$message}}</p>                
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">According Title</label>
                            <input type="text" class="form-control" name="title" value="{{$specific->title}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Text Content</label>
                            <textarea class="form-control" cols="5" rows="5" name="text_content"  id="editor">
                                {!!$specific->textContent!!}
                            </textarea>                            
                            @error('text_content')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
      
                        <div class="submit_button_align" style="text-align: right;">
                          <button type="submit" class="btn btn-success btn-lg">Update</button>
                        </div>                        
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
// ***** 
$('.p_file_image_1').change('.p_change_image_1',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_1').files[0];
  reader.onload =function(e){
      $(".p_change_image_1").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_2').change('.p_change_image_2',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_2').files[0];
  reader.onload =function(e){
      $(".p_change_image_2").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_3').change('.p_change_image_3',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_3').files[0];
  reader.onload =function(e){
      $(".p_change_image_3").attr('src',e.target.result);
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