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
    <h1>Product Update</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Product</li>
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
                <h5 class="card-title">Product Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{$product->p_name}}">
                            @error('product_name')
                            <p class="text-danger">{{$message}}</p>           
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Product Headline</label>
                            <input type="text" class="form-control" name="product_headline" value="{{$product->p_headline}}">
                            @error('product_headline')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Simple Description </label>
                            <textarea class="form-control" cols="5" rows="5" name="product_description"  id="editor">
                              {!!$product->p_description!!}
                            </textarea>                            
                            @error('product_description')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
      
                        <div class="row">
                            <div class="col-md-6 col-12 col-xl-6">
                                <div class="form-group mb-3">
                                  <label for="inputNumber" class=" col-form-label">Product Image</label>
                                  <img src="{{asset('uploads/product/'.$product->p_image)}}" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                  <input class="form-control p_file_image" type="file" id="formFile" name="product_image" >
                                  @error('product_image')
                                  <p class="text-danger">{{$message}}</p> 
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12 col-xl-6">
                                <div class="form-group mb-3">
                                  <label for="inputNumber" class=" col-form-label">Banner Image</label>
                                  <img src="{{asset('uploads/product/'.$product->p_banner)}}" alt="" class="change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                  <input class="form-control file_image" type="file" id="formFile" name="product_banner" >
                                  @error('product_banner')
                                  <p class="text-danger">{{$message}}</p> 
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 pb-2">This image for product page design</div>
                        <div class="row">
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 01</label>
                                <img src="{{asset('uploads/product/'.$product->image_1)}}" alt="" class="p_change_image_1 mb-2" style="width: 150px; height: 100px; display:block;">
                                <input class="form-control p_file_image_1" type="file" id="formFile" name="image_1" >
                                @error('product_image_1')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 02</label>
                                <img src="{{asset('uploads/product/'.$product->image_2)}}" alt="" class="p_change_image_2 mb-2" style="width: 150px; height: 100px; display:block;">
                                <input class="form-control p_file_image_2" type="file" id="formFile" name="image_2" >
                                @error('image_2')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 03</label>
                                <img src="{{asset('uploads/product/'.$product->image_3)}}" alt="" class="p_change_image_3 mb-2" style="width: 150px; height: 100px; display:block;">
                                <input class="form-control p_file_image_3" type="file" id="formFile" name="image_3" >
                                @error('image_3')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 04</label>
                                <img src="{{asset('uploads/product/'.$product->image_4)}}" alt="" class="p_change_image_4 mb-2" style="width: 150px; height: 100px; display:block;">
                                <input class="form-control p_file_image_4" type="file" id="formFile" name="image_4" >
                                @error('image_4')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 05</label>
                                <img src="{{asset('uploads/product/'.$product->image_5)}}" alt="" class="p_change_image_5 mb-2" style="width: 150px; height: 100px; display:block;">
                                <input class="form-control p_file_image_5" type="file" id="formFile" name="image_5" >
                                @error('image_5')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
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
// ***** 
$('.p_file_image_4').change('.p_change_image_4',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_4').files[0];
  reader.onload =function(e){
      $(".p_change_image_4").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_5').change('.p_change_image_5',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_5').files[0];
  reader.onload =function(e){
      $(".p_change_image_5").attr('src',e.target.result);
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