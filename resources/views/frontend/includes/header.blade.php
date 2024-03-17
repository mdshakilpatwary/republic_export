<?php
$siteInfoData = siteInfoData();
?>
<header id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light pt-2 pb-1" style="padding-left:50px; padding-right:50px;">
      <div class="container-fluid">
        @if($siteInfoData->logo != '')
        <a class="navbar-brand" href="{{route('homepage')}}"><img src="{{asset('uploads/siteinfo/'.$siteInfoData->logo)}}" style="width: 200px; max-height: 50px;" alt=""></a>
        @else
        <a class="navbar-brand navbar-brand-text " href="{{route('homepage')}}">Republic Export</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:1px solid #c4c2c2;">
          <span class="" style="color: #fff;"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{Route::is('about.page*')? 'active' : '' }}" href="{{route('about.page')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::is('expertise*')? 'active' : '' }}" href="{{route('expertise')}}">Our expertise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::is('our.product*')? 'active' : '' }}" href="{{route('our.product')}}">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::is('csr*')? 'active' : '' }}" href="{{route('csr')}}">CSR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::is('contact*')? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::is('career.page*')? 'active' : '' }}" href="{{route('career.page')}}">Career</a>
            </li>
            <li class="nav-item">
              <a href="https://www.linkedin.com/company/republicexport/about/" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a>
            </li>


          </ul>                     
             
          </div>
         
        </div>
      
    </nav>
   
  </header>