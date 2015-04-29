<!DOCTYPE html>
<html>
<head>
    <title>YoDezeen - Portfolio | Architecture</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/themes/front/css/dist/style.min.css" />
    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
     <link rel="stylesheet" type="text/css" href="/themes/front/css/responsive/responsive.css" />
  <link rel="stylesheet" type="text/css" href="/themes/front/css/responsive/responsive_tablet.css" />
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
<!-- �������� ����� ��� ���� ������� -->
<button id="menu-trigger"></button>
<!-- ���� -->
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
<!-- ������ -->
<!-- <div id="fullpage"> -->
    <!-- �������� 3 -->
    <!-- <div class="section best" id="page3">s -->
        <div class="port-container">
            <ul class="cbp-rfgrid">
                <?php if(is_array($architecture))
                    foreach($architecture as $item){
                        ?>						
                        <li class="grid portfol" style="position:relative;">
                            <a href="/project/item/<?=$item['id']?>" class="publication-item">
                                <figure class="effect-honey">
                                    <figcaption style="background-image:url(/uploads/projects/<?=$item['img']?>); background-size:cover;">
                                        <h2><?=$item['name']?><br> <i><?=$item['location']?></i></h2>
                                            <i><br><br></i>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <ul class="socials">
                                <li class="fb">
                                    <a href="#" onClick="Share.facebook('http://yodezeen.net/project/item/<?=$item['id']?>','<?=$item['name']?>','http://yodezeen.net/uploads/projects/facebook/<?=$item['img']?>','<?=$item['location']?>')">FB</a>
                                </li>
                                <li class="tw">
                                    <a href="#" onClick="Share.twitter('http://yodezeen.net/project/item/<?=$item['id']?>','<?=$item['name']?>')">Твитнуть</a>
                                </li>
                                <li class="pin">
                                    <a href="https://www.pinterest.com/pin/create/button/?url=http://yodezeen.net/project/item/<?=$item['id']?>&media=http://yodezeen.net/uploads/projects/<?=$item['img']?>&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin">PIN</a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
            </ul>
<!--         </div>
    </div> -->
</div>
<script src="/themes/front/js/jq.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script> <!-- 16 KB -->
<script src="/themes/front/js/jquery.easings.min.js"></script>
<script src="/themes/front/js/owl.carousel.js"></script>
<script src="/themes/front/js/jquery.svg.js"></script>
<script src="/themes/front/js/jquery.lettering.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.fullPage.min.js"></script>
<script src="/themes/front/js/modernizr.custom.js"></script>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script src="/themes/front/js/modernizr.custom.menu.js"></script>
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
    var loadArch = false, loadDesign = false, loadAll = false;
    var relativeX, relativeY;
    /*
     Document Ready function
     */
    function changeHeightFolio(){
        var totalHeight = $(window).height();
        var thisHeight;
        $(window).width() > 768 ? thisHeight = totalHeight / 3 : thisHeight = totalHeight; 
        var liEl = $('.port-container .cbp-rfgrid > li');
        liEl.css('height', thisHeight);
    }
    $(window).on('resize', function(){
        changeHeightFolio();
    });

    $(document).ready(function(){
        changeHeightFolio();
        
        // $('#fullpage').fullpage({
        //     scrollOverflow: true,
        //     css3: true,
        //     scrollingSpeed: 300,
        //     easingcss3: 'linear',
        //     easing: 'linear',
        //     navigationPosition: 'right',
        //     menu: '#mainMenu',
        // });

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
                // $.fn.fullpage.setAllowScrolling(false);
            } else {
                $(this).removeClass('active');
                mainMenuContainer.removeClass('active');
                trig = false;
                // $.fn.fullpage.setAllowScrolling(true);
            }
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
