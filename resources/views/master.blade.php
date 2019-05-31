<!DOCTYPE html>
<html>
<head>
<title>Passerelles numériques</title>

<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="A parallax scrolling experiment using jQuery" />
<base href="{{ asset('')}}">
<link rel="shortcut icon" type="image/png" href="image/logo-en.png"/>
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ ('css/styleparallax.css')}}"/>
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/dest/css/font-awesome.min.css">
<link rel="stylesheet" href="css/dest/vendors/colorbox/example3/colorbox.css">
<link rel="stylesheet" href="css/dest/rs-plugin/css/settings.css">
<link rel="stylesheet" href="css/dest/rs-plugin/css/responsive.css">
<link rel="stylesheet" title="style" href="css/dest/css/style.css">
<link rel="stylesheet" href="css/dest/css/animate.css">
<link rel="stylesheet" title="style" href="css/dest/css/huong-style.css">
<link rel="stylesheet" href="css/slide.css" />
<link href="../public/Yeucau.css" rel="stylesheet">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

    
        @include('header')
		@yield('content')
		@include('footer')

</body>
<script type="text/javascript" src="js/modernizr.custom.37797.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
<script>!window.jQuery && document.write("<script type='text/javascript' src='js/jquery-1.6.1.min.js'")</script>
</html>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
    setInterval(function () {
    moveRight();
   }, 6000);
 
var slideCount = $('#slider ul li').length;
var slideWidth = $('#slider ul li').width();
var slideHeight = $('#slider ul li').height();
var sliderUlWidth = slideCount * slideWidth;

$('#slider').css({ width: slideWidth, height: slideHeight });

$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

$('#slider ul li:last-child').prependTo('#slider ul');

   function moveLeft() {
       $('#slider ul').animate({
           left: + slideWidth
       }, 200, function () {
           $('#slider ul li:last-child').prependTo('#slider ul');
           $('#slider ul').css('left', '');
       });
   };

   function moveRight() {
       $('#slider ul').animate({
           left: - slideWidth
       }, 200, function () {
           $('#slider ul li:first-child').appendTo('#slider ul');
           $('#slider ul').css('left', '');
       });
   };

   $('.control_prev').click(function () {
       moveLeft();
   });

   $('.control_next').click(function () {
       moveRight();
   });

});    
</script>
