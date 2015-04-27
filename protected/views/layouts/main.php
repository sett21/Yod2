<!DOCTYPE html>
<html>
<head>
	<title>Архитектура</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <meta name="viewport" content="width=device-width, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="/themes/front/css/dist/style.min.css" />
	<!--[if IE]>
	 		<link rel="stylesheet" type="text/css" href="/themes/front/css/style-ie.css" />
	<![endif]-->

	<!-- fotorama.css & fotorama.js. -->

	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="/themes/front/js/jq.js"></script>
	<script src="/themes/front/js/jquery.tmpl.js"></script>

	<script id="fpreview" type="text/x-jquery-tmpl">
		<li class="grid portfol" style="position:relative;">
			<a href="/project/${id}/">
				<figure class="effect-honey">
					<figcaption style="background-image:url(${previewImg}); background-size:cover;">
						<h2>${folioCaption}<br><span>${location}</span>
							<i><br><br></i>
						</h2>
					</figcaption>
				</figure>
			</a>
			<ul class="socials">
				<li class="fb"><a href="#">FB</a></li>
				<li class="tw"><a href="#">TW</a></li>
				<li class="pin"><a href="#">FB</a></li>
				<li class="inst"><a href="#">TW</a></li>
			</ul>
		</li>
	</script>

</head>
<body>
<div class="loading">
	<svg viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <symbol id="s--circle">
        <circle r="10" cx="20" cy="20"></circle>
      </symbol>
      
      <g class="g-circles g-circles--v1">
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>  
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
        <g class="g--circle">
          <use xlink:href="#s--circle" class="u--circle"/>
        </g>
      </g>
  </svg>	
</div>
<!-- Элементы общие для всех страниц -->
<button id="menu-trigger"></button>
<?php echo $content; ?> 
<!--[if IE]>
	 		qweqqweqweqweqw
	<![endif]-->

<!--Include scripts -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script> <!-- 16 KB --> 
<script src="/themes/front/js/jquery.easings.min.js"></script>
<script src="/themes/front/js/owl.carousel.js"></script>
<script src="/themes/front/js/jquery.svg.js"></script>
<script src="/themes/front/js/jquery.lettering.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.fullPage.min.js"></script>
<script src="/themes/front/js/modernizr.custom.js"></script>
<script src="/themes/front/js/modernizr.custom.menu.js"></script>
<script type="text/javascript" src="/themes/front/js/arch.js"></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '997514503601397',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
