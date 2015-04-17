
<!-- Меню -->
<div class="nav main">
	<div id="main-menu">
		<nav class="cl-effect-2" id="mainMenu">
			<span data-menuanchor="page-1"><a id="m1" href="#page-1"><span data-hover="H&Oslash;ME">H&Oslash;ME</span></a></span>
			<span data-menuanchor="page-2"><a id="m2" href="#page-2"><span data-hover="AB&Oslash;UTUS">AB&Oslash;UTUS</span></a></span>
			<span data-menuanchor="page-3"><a id="m3" href="#page-4"><span data-hover="C&Oslash;NTACTS">C&Oslash;NTACTS</span></a></span>
			<span data-menuanchor="firstPage"><a id="m4" href="/architecture/"><span data-hover="ARCHITECTURE">ARCHITECTURE</span></a></span>
			<span data-menuanchor="firstPage"><a id="m5" href="/design/"><span data-hover="DESIGN">DESIGN</span></a></span>
			<span data-menuanchor="firstPage"><a id="m6" target="_blank" href="http://blog.yodezeen.com/"><span data-hover="BL&Oslash;G">BL&Oslash;G</span></a></span>
			<span data-menuanchor="firstPage"><a id="m7" href="/publications/"><span data-hover="PUBLICATION">PUBLICATION</span></a></span>
		</nav>
	</div>
</div>
<div class="nav additional">
	<div id="additional-menu">
		<nav class="cl-effect-2" id="mainMenu">
			<br/><br/><br/><br/><br/><br/>
			<span data-menuanchor="firstPage"><a id="m4" href="/architecture/"><span data-hover="ARCHITECTURE">ARCHITECTURE</span></a></span>
			<span data-menuanchor="firstPage"><a id="m5" href="/design/"><span data-hover="DESIGN">DESIGN</span></a></span>
		</nav>
	</div>
</div>
<!-- Слайды -->
<div id="fullpage">
	<!-- Страница 1 -->
	<div class="section" id="page1">
		<div class="slide"  data-anchor="splash" id="splash-slide">
			<div id="trailer" class="is_overlay">
				<video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
					<source src="/themes/front/video/mainpage.m4v" type="video/mp4" />
					<source src="/themes/front/video/mainpage.webm" type="video/webm" />
					<source src="/themes/front/video/mainpage.ogv" />
					<!-- <source src="video/mainpage1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
					<source src="video/mainpage1.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
					Этот браузер не поддерживает HTML5 видео
				</video>
				<!-- <div class="mask"></div> -->
			</div>
			<div class="os-phrases" id="os-phrases">
				<h2>Y&Oslash;DEZEEN</h2>
				<h2>DESIGN</h2>
				<h2>ARCHITECTURE</h2>
				<img src="/themes/front/img/logo.png" class="logo anim-logo"/>
			</div>
			<div class="slide-down"></div>
		</div>
		<div class="slide" data-anchor="architecture" id="architecture">
			<div class="port-container">
				<ul class="cbp-rfgrid">

				</ul>
			</div>
		</div>
		<div class="slide" data-anchor="design" id="design">
			<div class="port-container">
				<ul class="cbp-rfgrid">
					
				</ul>
			</div>
		</div>
		<div class="slide" data-anchor="all-works" id="all-works">
			<div class="port-container">
				<ul class="cbp-rfgrid">
					
				</ul>
			</div>
		</div>
	</div>
	<!-- Страница 2 -->
	<div class="section" id="page2">
		<div class="slide" data-anchor="about-us">
			<p class="text-ab"><?=$about ?></p>
		</div>
		<div class="slide" data-anchor="projects" id="projects">
			<div class="mapc">
				<object data="/themes/front/img/map.svg" type="image/svg+xml" id="svgmap" width="100%" style="margin: 0 auto;">
					<p>Ваш браузер не поддержует интерактивную карту!</p>
				</object>
				<p id="map-txt"></p>
			</div>
			<p class="text-ab shad our ourp">&Oslash;UR &Oslash;BJECTS</p>
			
		</div>
		<div class="slide">
			<ul class="cbp-rfgrid command" style="overflow: hidden;">
			<?php if(is_array($team))
					foreach($team as $item){
			?>				
				<li class="grid">
					<figure class="effect-honey">
					<!-- <div class="info"> -->
					<!-- <img src="/themes/front/img/1.jpg"> -->
					<figcaption style="background-image:url(/uploads/team/<?=$item['img']?>); background-size:cover;">
					<!-- <a class="img-lnk" href="#" style="background-image:url(/themes/front/img/1.jpg);"></a> -->
						<h2><?=$item['name']?><br> <i><?=$item['position']?></i></h2>
						<!-- <p>UKRAINE  KYIV  700FT</p> -->
					<!-- </div> -->
					</figcaption>
					</figure>
				</li>
			<?php }?>
			</ul>
			<p class="text-ab our">&Oslash;UR TEAM</p>
		</div>
		<!-- <div class="mask"></div> -->
	</div>
	<!-- Страница 3 -->
	<div class="section best" id="page3">
		<div class="all-works"><a href="#">All projects</a></div>

		<div class="fotorama" data-width="100%" data-height="100%" data-loop="true" data-nav="false" data-click="false" data-swipe="false"  data-keyboard="true">
			<?php if(is_array($bestProjects))
					foreach($bestProjects as $item){
			?>			
			<div class="slide-fr">
				<div class="img" style="background-image:url(/uploads/projects/<?=$item['img']?>);"></div>
				<a class="text-ab" href="/project/<?=$item['id']?>/"><?=$item['name']?></a>
			</div>
			<?php }?>
		</div>
	</div>
	<!-- Страница 4 -->
	<div class="section" data-anchor="page-4" id="page4" style="background-image: url(/uploads/blocks/<?=$contacts['img']?>); background-size:cover; ">
	
		<div class="cnt-txt">
	        	    <?= $contacts['body']?>
	        	    <?= $contacts['name']?>
	<!--            <h3>Ukraine Kiev</h3>-->
	<!--            <p>Mehanizatorov 2a</p>-->
	<!--            <br>-->
	<!--            <p>Zverev Artem: +380688303675<br>-->
	<!--            Sharf Artur: +380678480504</p>-->
	<!--            <br><br>-->
	<!--            <h3>Usa Florida Miami</strong></h3>-->
	<!--            <br>-->
	<!--            <p>+19174000230<br>-->
	<!--            Artem Zverev & Artur Sharf</p>-->
        	</div>
	</div>
</div>
