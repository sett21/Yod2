<!DOCTYPE html>
<html>
<head>
	<title>Yodezeen - Portfolio | <?=$item['name']?></title>



    <meta property="og:title" content="<?=$item['name']?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://yodezeen.atrubachev.dev.gns-it.com/project/item/<?=$item['id']?>"/>
    <meta property="og:image" content="http://yodezeen.atrubachev.dev.gns-it.com/project/item/<?=$item['img']?>"/>
    <meta property="og:site_name" content="yodezeen.com"/>
    <meta property="og:description" content="<?=$item['body']?>"/>


    <link rel="stylesheet" href="/themes/front/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="/themes/front/css/jquery.fullPage.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/themes/front/css/component.css" />
	<link rel="stylesheet" type="text/css" href="/themes/front/css/style.css" />
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
<a class="icon-back" href="<?php if($item['type']=='1'){
    echo '/architecture/';
}
else {
    echo '/design/';
}?>">Back</a>
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
			<span data-menuanchor="page-1"><a id="m4" href="/architecture/"><span data-hover="ARCHITECTURE">ARCHITECTURE</span></a></span>
			<span data-menuanchor="firstPage"><a id="m5" href="/design/"><span data-hover="DESIGN">DESIGN</span></a></span>
			<span data-menuanchor="firstPage"><a id="m6" target="_blank" href="http://blog.yodezeen.com/"><span data-hover="BL&Oslash;G">BL&Oslash;G</span></a></span>
			<span data-menuanchor="firstPage"><a id="m7" href="/publications/"><span data-hover="PUBLICATION">PUBLICATION</span></a></span>
		</nav>
	</div>

</div>

<div class="soc-but">
    <ul class="socials">
        <li class="fb">
            <a href="#" onClick="Share.facebook('http://yodezeen.atrubachev.dev.gns-it.com/project/item/<?=$item['id']?>','<?=$item['name']?>','http://yodezeen.atrubachev.dev.gns-it.com/uploads/projects/<?=$item['img']?>','<?=$item['location']?>')">FB</a>
        </li>
        <li class="tw">
            <a href="#" onClick="Share.twitter('http://yodezeen.atrubachev.dev.gns-it.com/project/item/<?=$item['id']?>','<?=$item['name']?>')">Твитнуть</a>
        </li>
        <li class="pin">
            <a href="https://www.pinterest.com/pin/create/button/?url=http://yodezeen.atrubachev.dev.gns-it.com/project/item/<?=$item['id']?>&media=http://yodezeen.atrubachev.dev.gns-it.com/uploads/projects/<?=$item['img']?>&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" >PIN</a>
        </li>
        <!--<li class="inst"><a href="#">TW</a></li>-->
    </ul>
</div>

<!-- Слайды -->
<p class="capt active"><?=$item['name']?></p>
<div id="fullpage" class="folio-it">
	<?php foreach($photos as $photo) { ?>
	<!-- Страница 1 -->
	<div class="section">
		<div class="img" style="background-image:url(/uploads/projects/list/<?=$item['id']?>/<?=$photo?>)"></div>
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
<script>
    Share = {
        vkontakte: function(purl, ptitle, pimg, text) {
            url  = 'http://vkontakte.ru/share.php?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title='       + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&image='       + encodeURIComponent(pimg);
            url += '&noparse=true';
            Share.popup(url);
        },
        odnoklassniki: function(purl, text) {
            url  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
            url += '&st.comments=' + encodeURIComponent(text);
            url += '&st._surl='    + encodeURIComponent(purl);
            Share.popup(url);
        },
        facebook: function(purl, ptitle, pimg, text) {
            url  = 'http://www.facebook.com/sharer.php?s=100';
            url += '&p[title]='     + encodeURIComponent(ptitle);
            url += '&p[summary]='   + encodeURIComponent(text);
            url += '&p[url]='       + encodeURIComponent(purl);
            url += '&p[images][0]=' + encodeURIComponent(pimg);
            Share.popup(url);
        },
        twitter: function(purl, ptitle) {
            url  = 'http://twitter.com/share?';
            url += 'text='      + encodeURIComponent(ptitle);
            url += '&url='      + encodeURIComponent(purl);
            url += '&counturl=' + encodeURIComponent(purl);
            Share.popup(url);
        },
        mailru: function(purl, ptitle, pimg, text) {
            url  = 'http://connect.mail.ru/share?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title='       + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&imageurl='    + encodeURIComponent(pimg);
            Share.popup(url)
        },

        popup: function(url) {
            window.open(url,'','toolbar=0,status=0,width=626,height=436');
        }
    };
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#fullpage').fullpage({
			scrollOverflow: true,
			css3: true,
			scrollingSpeed: 300,
			easingcss3: 'linear',
			easing: 'linear',
        	navigationPosition: 'right',
			menu: '#mainMenu',
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
</body>
</html>
