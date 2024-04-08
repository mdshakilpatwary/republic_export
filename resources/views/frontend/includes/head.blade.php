
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <title>@yield('pageTitle')</title> --}}
  <title>{{$pageTitle}}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/animate.css">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/style.css">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/floating-wpp.min.css"> --}}
<style>
  .our_product_info-3 .our_product_info_content .accordion{
    border-bottom: 1px solid #ddd;
  }
  
  .our_product_info-3 .our_product_info_content .accordion .accordion-header {
	border-top: 1px solid #ddd;
	padding: 10px 0;
}

.about-info-content h2 strong {
	color: black;
}
#our_expertise_info-2 .our_expertise_info_content-2 ul li {
	font-size: 16px;
	font-weight: 500;
	letter-spacing: 0px;
}
.csr_feature_item p {
	color: black;
}
.csr_feature_3 p {
	color: #fff;
}
.contact_whatsapps_button {
	position: fixed;
	right: 41px;
	bottom: 45px;
  z-index: 999;
}
.contact_whatsapps_button .contact_link {
	color: #0cc143;
	font-size: 57px;
  z-index: 999;

}

/* home  */
.industrial_content{
      display: flex;
    flex-wrap: wrap;

}
.industrial_content_item{
  width:18% ; 
  box-sizing: border-box;
  margin:10px 1%;
}

@media (min-width: 20px) and (max-width: 450px) {
.industrial_content{
      display: flex;
    flex-wrap: wrap;

}
.industrial_content_item{
  width:48% ; 
  box-sizing: border-box;
  margin:10px 1%;
}
}
@media (min-width: 450px) and (max-width: 600px) {
.industrial_content{
      display: flex;
    flex-wrap: wrap;

}
.industrial_content_item{
  width:48% ; 
  box-sizing: border-box;
  margin:10px 1%;
}
}
@media (min-width: 600px) and (max-width: 992px) {
.industrial_content{
    display: flex;
    flex-wrap: wrap;

}
.industrial_content_item{
  width:31% ; 
  box-sizing: border-box;
  margin:10px 1%;
}
}
@media (min-width: 992px) and (max-width: 1190px) {
.industrial_content{
      display: flex;
    flex-wrap: wrap;

}
.industrial_content_item{
  width:23% ; 
  box-sizing: border-box;
  margin:10px 1%;
}
}

</style>
</head>