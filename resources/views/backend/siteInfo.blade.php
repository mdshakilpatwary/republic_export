@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Account Settings</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Settings</li>
        <li class="breadcrumb-item active">Site Info</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">

      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

              <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Edit Site Info</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                <h5 class="card-title">Site Informations</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Site Logo</div>
                  @if($siteInfo->logo != '')
                    <div class="col-lg-9 col-md-8">
                        <img src="{{asset('uploads/siteinfo/'.$siteInfo->logo) }}" alt="Profile" class=" " style="width: 200px; height: 100px;">
                    </div>
                  @else
                    <div class="col-lg-9 col-md-8"><strong>Empty Logo Image</strong></div>
                  @endif
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Site Name</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->name}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->email}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Number 01</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->phone_1}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Number 02</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->phone_2}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Address Line 01</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->address_1}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Address Line 02</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->address_2}}</div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                <!-- Profile Edit Form -->
                @php
                    $typeName = 'active_siteInfo';
                @endphp
                <form method="POST" action="{{route('site.info.update', $typeName)}}" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                    <label for="image" class="col-md-4 col-lg-3 col-form-label">Site Logo</label>
                    <div class="col-md-8 col-lg-9">
                        @if($siteInfo->logo != '')
                        <img src="{{asset('uploads/siteinfo/'.$siteInfo->logo) }}" alt="Profile" class="change_image" style="width: 200px; height: 100px; margin-bottom: 10px;">
                        @else
                        <img src="" alt="" class="change_image" style="width: 200px; height: 100px; margin-bottom: 10px;">
                        @endif
                        <input type="file" name="logo" class="file_image d-block mt-2">
                        @error('logo')
                            <p class="text-danger">{{$message}}</p>
                            
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Site Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="name" value="{{$siteInfo->name}}">
                      @error('name')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="phone" value="{{$siteInfo->email}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="phone_1" class="col-md-4 col-lg-3 col-form-label">Phone 01</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone_1" type="text" class="form-control" id="phone_1" value="{{$siteInfo->phone_1}}">
                        @error('phone_1')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone 02 (Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone_2" type="text" class="form-control" id="phone" value="{{$siteInfo->phone_2}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="address_1" class="col-md-4 col-lg-3 col-form-label">Address Line 01</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address_1" type="text" class="form-control" id="address_1" value="{{$siteInfo->address_1}}">
                        @error('address_1')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="address_2" class="col-md-4 col-lg-3 col-form-label">Address Line 02 (Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address_2" type="text" class="form-control" id="address_2" value="{{$siteInfo->address_2}}">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
    
@endsection