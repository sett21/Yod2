<!DOCTYPE html>
<html>
<head>
	<title>YoDezeen - Publications | <?=$item['name']?></title>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/themes/front/css/dist/style.min.css" />
	 <link rel="stylesheet" type="text/css" href="/themes/front/css/responsive/responsive.css" />
  <link rel="stylesheet" type="text/css" href="/themes/front/css/responsive/responsive_tablet.css" />
	<script src="/themes/front/js/jq.js"></script>
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
<div class="triger-info"></div>
<div class="triger-down"></div>
<i class="icon-info">i</i>
<a class="icon-back" href="/publications/">Back</a>
<div class="information">
	<h2><?=$item['name']?></h2>
	<p><?=$item['body']?></p>
</div>
<!-- Меню -->
<div class="nav">
	<div id="main-menu">

			<nav class="cl-effect-2" id="mainMenu">
			<span data-menuanchor="page-1"><a id="m1" href="/"><span data-hover="H&Oslash;ME">H&Oslash;ME</span></a></span>
			<span data-menuanchor="page-2"><a id="m2" href="/#page-2"><span data-hover="AB&Oslash;UTUS">AB&Oslash;UTUS</span></a></span>
			<span data-menuanchor="page-3"><a id="m3" href="/#page-4"><span data-hover="C&Oslash;NTACTS">C&Oslash;NTACTS</span></a></span>
			<span data-menuanchor="page-1"><a id="m4" href="/#page-1/architecture"><span data-hover="ARCHITECTURE">ARCHITECTURE</span></a></span>
			<span data-menuanchor="firstPage"><a id="m5" href="/#page-1/design"><span data-hover="DESIGN">DESIGN</span></a></span>
			<span data-menuanchor="firstPage"><a id="m6" target="_blank" href="http://blog.yodezeen.com/"><span data-hover="BL&Oslash;G">BL&Oslash;G</span></a></span>
			<span data-menuanchor="firstPage"><a id="m7" href="/publications/"><span data-hover="PUBLICATION">PUBLICATION</span></a></span>
		</nav>
	</div>

</div>
<!-- Слайды -->
<p class="capt active"><?=$item['name']?></p>
<div id="fullpage" class="folio-it">
	<?php foreach($photos as $photo) { ?>
	<!-- Страница 1 -->
	<div class="section">
		<div class="img" style="background-image:url(/uploads/publications/list/<?=$item['id']?>/<?=$photo?>)"></div>
	</div>
	<?php } ?>
</div>
<!--Include scripts -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<script src="/themes/front/js/jquery.easings.min.js"></script>
<script src="/themes/front/js/jquery.svg.js"></script>
<script src="/themes/front/js/jquery.lettering.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.fullPage.min.js"></script>
<script src="/themes/front/js/modernizr.custom.js"></script>
<script src="/themes/front/js/modernizr.custom.menu.js"></script>
<!-- <script type="text/javascript" src="/themes/front/js/arch.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#fullpage').fullpage({
			scrollOverflow: true,
			css3: true,
			scrollingSpeed: 300,
			easingcss3: 'linear',
			easing: 'linear',
        	navigationPosition: 'right',
			menu: '#mainMenu'
		});
		/* 
	Navigation
*/

	var mainMenuContainer = $('.nav'), menuTrigger = $('#menu-trigger');
	var trig = false;

	menuTrigger.on('click',function() {
		if (!trig){
			$(this).addClass('active');
			mainMenuContainer.addClass('active');
			trig = true;
			$.fn.fullpage.setAllowScrolling(false);
		} else {
			$(this).removeClass('active');
			mainMenuContainer.removeClass('active');
			trig = false;
			$.fn.fullpage.setAllowScrolling(true);
		}
	});
	$('.triger-down').on('click', function(){
		$.fn.fullpage.moveSectionDown();
	});
	$('.triger-info, .icon-info').hover(function(){
		$('.icon-info').addClass('active');
		$('.information').addClass('active');
	});
	$('.information').on('mouseleave',function(){
		$(this).removeClass('active');
		$('.icon-info').removeClass('active');
	});
});
	$(window).load(function () {
			$('.loading').slideUp(300);
			setTimeout(function(){
				$('.capt').removeClass('active');				
			}, 4000);
	});
</script>
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
