var loadArch = false, mainVideo = $('#video')[0], loadDesign = false, loadAll = false;
var relativeX, relativeY;

function changeHeightFolio(){
	var totalHeight = $(window).height();
	var thisHeight;
	$(window).width() > 768 ? thisHeight = totalHeight / 3 : thisHeight = totalHeight; 
	var liEl = $('.port-container .cbp-rfgrid > li');
	liEl.css('height', thisHeight);
}
function changeHeightCommand(){
	var totalHeight = $(window).height();
	var thisHeight;
	$(window).width() > 768 ? thisHeight = totalHeight / 2 : thisHeight = totalHeight;
	console.log(thisHeight);
	var liEl = $('.cbp-rfgrid.command > li');
	liEl.css('height', thisHeight);
}
/*
	Document Ready function
*/

$(function (){

	var indexPage = "", 
		textAbout = $('#page2 .text-ab'),
		
		menuTrigger = $('#menu-trigger'),
		mainMenuContainer = $('.nav.main'),
		additionalMenu = $('.nav.additional'),
		mainMenuItem = $(".cl-effect-2 a"),
		allWorks = $('.all-works'),
		logo = $('.logo');
		trig = false;
	changeHeightCommand();

	$(window).on('resize', function(){
		changeHeightCommand();
		changeHeightFolio();
	});

	$('#fullpage').fullpage({
		scrollOverflow: true,
		css3: true,
		scrollingSpeed: 300,
		easingcss3: 'linear',
		easing: 'easeInOutCubic',
		anchors: ['page-1','page-2','page-3','page-4'],
		menu: '#mainMenu',
		touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

		afterRender: function(){
			
		},

		onLeave: function(index, nextIndex, direction){
			if(index === 1 || index === 3){
			 //	mainVideo.pause();
			}
		},

		afterLoad: function(anchorLink, index){
			if(index == 2){
				textAbout.addClass('active');
			}
			if(index == 1){
				//mainVideo.play();
			}
		},

		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
			if(index == 2 && slideIndex == 2){
				//$.fn.fullpage.setAllowScrolling(false);
			}
			if(index == 2 && slideIndex == 1){
				setTimeout(function(){
					$('.ourp').addClass('slowhide');				
				}, 2000);
				setTimeout(function(){
					$('.ourp').css('display', 'none');				
				}, 5000);
			}
		},
		
        onSlideLeave: function(anchorLink, index, slideIndex, direction){
        	if(index == 2 && slideIndex == 2){
				//$.fn.fullpage.setAllowScrolling(true);
			}
			if(index == 2 && slideIndex == 1){
				$('.ourp').css('display','block').removeClass('slowhide');		
			}
        }
	});
/* 
	Navigation
*/
	menuTrigger.on('click',function() {
		if (!trig){
			$(this).addClass('active');
			mainMenuContainer.addClass('active');
			trig = true;
			logo.removeClass('anim-logo');
			//logo.fadeOut(300,0);
			logo.addClass('hide');
			logo.removeClass('show');
			$.fn.fullpage.setAllowScrolling(false);
		} else {
			additionalMenu.removeClass('active');
			$(this).removeClass('active');
			mainMenuContainer.removeClass('active');
			trig = false;
			$.fn.fullpage.setAllowScrolling(true);
			logo.addClass('show');
			logo.removeClass('hide');
		}
	});
	allWorks.on('click', function(event){
		event.preventDefault();
		if (!trig){
			additionalMenu.addClass('active');
			menuTrigger.addClass('active');
			trig = true;
			$.fn.fullpage.setAllowScrolling(false);
		}
	});
	mainMenuItem.on("click", function(event){
		logo.removeClass('hide');
		$.fn.fullpage.setAllowScrolling(true);
		setTimeout(function(){
			trig = false;
			menuTrigger.removeClass('active');
			mainMenuContainer.removeClass('active');
		}, 1000);
	});

	 $('.port-container').on("click",".img-lnk",function(event){
	 	event.preventDefault();
	 	$('.loading').slideDown(300);
	 	setTimeout(function(){
	 		window.location = "item.html";
	 	});
	 });

	$('.triger-down, .slide-down').on('click', function(){
		$.fn.fullpage.moveSectionDown();
	});
	 
});

$(window).load(function () {
	var svgobject = document.getElementById('svgmap'),
		splashText = $("#os-phrases > h2");
	if ('contentDocument' in svgobject) {
		var svgdom = $(svgobject.contentDocument);
		var mapTxt = $('#map-txt');
	}
	$(svgdom).mousemove(function(e) {
		relativeX = (e.pageX);
		relativeY = (e.pageY);
		mapTxt.css({
			left: (relativeY - 20),
			left: (relativeX + 20)
		});
	});
	$(".st0.active", svgdom).hover(function(){
		var _this = $(this);

		if (_this.attr('id') == "el1"){
			_this.attr('r', 4);
			mapTxt.text('New York').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el2"){
			_this.attr('r', 4);
			$('#el2-2').css('opacity', '1');
			mapTxt.text('Miami').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el4"){
			_this.attr('r', 4);
			mapTxt.text('Kiev').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el5"){
			_this.attr('r', 4);
			mapTxt.text('Moskow').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el3"){
			_this.attr('r', 4);
			mapTxt.text('Israel').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el6"){
			_this.attr('r', 4);
			mapTxt.text('Dubai').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el7"){
			_this.attr('r', 4);
			mapTxt.text('Panama').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		} else if (_this.attr('id') == "el8"){
			_this.attr('r', 4);
			mapTxt.text('Monaco').addClass('show').css({
				top: relativeY-15,
				left: (relativeX + 10)
			});
		}
	}, function(){
		var _this = $(this);
		_this.attr('r', 3);
		mapTxt.text('').removeClass('show');
	});
	$('.loading').slideUp(300);
	splashText.lettering('words').children("span").lettering().children("span").lettering(); 
	$('.logo').addClass('active');
	mainVideo.play();
});


	
