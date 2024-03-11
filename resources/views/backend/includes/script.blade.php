<script src="{{asset('backend')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('backend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="{{asset('backend')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('backend')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('backend')}}/assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend')}}/assets/js/main.js"></script>


  <script>
    //  onchange image file part
$(document).ready(function(){
  $('.file_image').change('.change_image',function(){
    let reader =new FileReader();
    let file =document.querySelector('.file_image').files[0];
    reader.onload =function(e){
        $(".change_image").attr('src',e.target.result);
    }
    reader.readAsDataURL(file);
});
});



  </script>

</body>

</html>