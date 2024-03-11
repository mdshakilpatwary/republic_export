<?php
$siteInfoData = siteInfoData();
?>

<section id="pre-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-xl-2 col-12 col-sm-12">
            <div class="footer-logo">
              @if($siteInfoData->logo != '')
              <a href="{{route('homepage')}}"><img src="{{asset('uploads/siteinfo/'.$siteInfoData->logo)}}" alt="" style="max-height: 40px"></a>
              @else
              {{-- {{$siteInfoData->address_1}} --}}
              <a href="{{route('homepage')}}">{{$siteInfoData->name}}</a>
              @endif
            </div>
            <div class="footer-address-line">
              <p>{{$siteInfoData->address_1}}</p>
            </div>
        </div>
        <div class="col-md-2 col-xl-2 col-12 col-sm-12">
            <div class="hide-space"></div>
            <div class="footer-address-line">
              <p>{{$siteInfoData->address_2}}</p>
              
            </div>
        </div>
        <div class="col-md-4 col-xl-4 col-12 col-sm-12"></div>
        <div class="col-md-2 col-xl-2 col-12 col-sm-12">
            <div class="heading"><h3>Contact US</h3></div>
            <div class="footer-contact-line">
              <a href="mailto:hello@gmail.com">{{$siteInfoData->email}}</a>
            </div>
        </div>
        <div class="col-md-2 col-xl-2 col-12 col-sm-12">
            <div class="heading"><h3>Follow US</h3></div>
            <div class="footer-contact-line">
              <a href="" target="_blank">Linkedin</a>
            </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <hr style="padding: 0;">
    <div class="container">
      <div class="row text-center">
        <p>&copy; All Rights Reserved by Republic Export| Develop By:  <a href="https://binarytobyte.com">Binary Byte</a>
        </p>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer>