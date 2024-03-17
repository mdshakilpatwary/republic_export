
@include('frontend.includes.head')

<body>

  <div class="loader"></div>
  <div id="myDiv">
<!-- main content part  -->
@yield('mainContent')

<div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
  <div class="contact_whatsapps_button">
      <a href="https://wa.me/+8801787180918" target="blank" class="contact_link"><i class="fab fa-whatsapp"></i></a>
  </div>
</div>
@include('frontend.includes.footer')


    <!---->
</div>
<!-- script part  -->
@include('frontend.includes.script')

</body>
</html>
