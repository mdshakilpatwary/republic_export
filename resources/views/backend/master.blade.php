<?php
$siteInfo =siteInfoData();
?>
@include('backend.includes.head')

<body>

<!-- ======= Header ======= -->
@include('backend.includes.header')
 
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('backend.includes.sidebar')
<!-- End Sidebar-->

  <main id="main" class="main">

    @yield('main_body_content_part')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>{{$siteInfo->name}}</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Develop by <a href="https://binarytobyte.com">BinaryBite</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--  JS Files -->
  @include('backend.includes.script')