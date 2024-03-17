@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Add Product Image</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Product</li>
        <li class="breadcrumb-item active">Image</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Product Image</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('product.image.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="col-form-label">Select Product</label>
                            <select name="product_name" class="form-select" aria-label="Default select example">
                                <option disabled selected>-----Select-----</option>
                              @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->p_name}}</option>
                              @endforeach
                              </select>
                            @error('product_name')
                            <p class="text-danger">{{$message}}</p>                
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Multiple Image</label>
                            <input class="form-control file_image" type="file" name="product_image[]" multiple>
                            @error('product_image')
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