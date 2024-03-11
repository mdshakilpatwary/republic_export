
@include('frontend.includes.head')

<body>

  <div class="loader"></div>
  <div id="myDiv">
<!-- main content part  -->
@yield('mainContent')
@include('frontend.includes.footer')


    <!---->
</div>
<!-- script part  -->
@include('frontend.includes.script')


</body>
</html>
