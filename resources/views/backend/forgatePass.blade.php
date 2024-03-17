<?php
$siteInfo = siteInfoData();
?>
@include('backend.includes.head')

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('')}}" alt="">
                  <span class="d-none d-lg-block">{{$siteInfo->name}}</span>
                </a>
              </div>
              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('forgate.password.email') }}" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="email" class="form-label">Enter Your Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                      @error('email')
                      <p class="text-danger ">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>

                  </form>
                 

                </div>
              </div>

              <div class="copyright">
                &copy; Copyright <strong><span>{{$siteInfo->name}}</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Develop by <a href="https://binarytobyte.com">BinaryBite</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('backend.includes.script')