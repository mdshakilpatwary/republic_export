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
    <h1>Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Product</li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Product Add</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}" required>
                            <div class="invalid-feedback">Please input product name</div>
                            @error('product_name')
                            <p class="text-danger">{{$message}}</p>           
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Product Headline</label>
                            <input type="text" class="form-control" name="product_headline" value="{{old('product_headline')}}" required>
                            <div class="invalid-feedback">Please input product head_line</div>
                            @error('product_headline')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">Short Description </label>
                            <textarea class="form-control" cols="5" rows="5" name="product_description"  id="editor" required>
                              {{old('product_description')}}
                            </textarea>                            
                            <div class="invalid-feedback">Please input short description</div>
                            @error('product_description')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
      
                        <div class="row">
                            <div class="col-md-6 col-12 col-xl-6">
                                <div class="form-group mb-3">
                                  <label for="inputNumber" class=" col-form-label">Product Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                                  <img src="" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                  <input class="form-control p_file_image" type="file" id="formFile" name="product_image" required>
                                  <div class="invalid-feedback">Please input product image</div>
                                  @error('product_image')
                                  <p class="text-danger">{{$message}}</p> 
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12 col-xl-6">
                                <div class="form-group mb-3">
                                  <label for="inputNumber" class=" col-form-label">Banner Image <span style="color: #6b6868">(resolution 1200x600 )</span></label>
                                  <img src="" alt="" class="change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                  <input class="form-control file_image" type="file" id="formFile" name="product_banner" required>
                                  <div class="invalid-feedback">Please input banner image</div>
                                  @error('product_banner')
                                  <p class="text-danger">{{$message}}</p> 
                                  @enderror
                                </div>
                            </div>

                        </div>
                        <div class="pt-5 pb-2">This Image For Product Page Layout Design</div>
                        <div class="row">
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 01 <span style="color: #6b6868">(resolution 550x600 )</span></label>
                                <input class="form-control " type="file" id="formFile" name="image_1" required>
                                <div class="invalid-feedback">Please input image 01</div>
                                @error('product_image_1')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 02 <span style="color: #6b6868">(resolution 550x600 )</span></label>
                                <input class="form-control" type="file" id="formFile" name="image_2" required>
                                <div class="invalid-feedback">Please input image 02</div>
                                @error('image_2')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 03 <span style="color: #6b6868">(resolution 500x400 )</span></label>
                                <input class="form-control " type="file" id="formFile" name="image_3" required>
                                <div class="invalid-feedback">Please input image 03</div>
                                @error('image_3')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 04 <span style="color: #6b6868">(resolution 700x500 )</span></label>
                                <input class="form-control " type="file" id="formFile" name="image_4" required>
                                <div class="invalid-feedback">Please input image 04</div>
                                @error('image_4')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                          <div class="col-md-6 col-12 col-xl-6">
                              <div class="form-group mb-3">
                                <label for="inputNumber" class=" col-form-label">Image 05 <span style="color: #6b6868">(resolution 350x500 )</span></label>
                                <input class="form-control " type="file" id="formFile" name="image_5" required>
                                <div class="invalid-feedback">Please input image 05</div>
                                @error('image_5')
                                <p class="text-danger">{{$message}}</p> 
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="submit_button_align" style="text-align: right;">
                        <button type="submit" class="btn btn-success btn-lg">Add</button>
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


});

// editor 
$(document).ready(function(){
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
});

</script>
@endsection