<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/images/favicon.png">
	<title><?php echo Yii::app()->name?></title>
	<!--Core CSS -->
	<link href="/themes/admin/css/bs3/css/bootstrap.min.css" rel="stylesheet">
	<link href="/themes/admin/css/bootstrap-reset.css" rel="stylesheet">
	<link href="/themes/admin/css/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="/themes/admin/css/clndr.css" rel="stylesheet">
	<link href="/themes/admin/css/bootstrap-switch.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="/themes/admin/css/style.css" rel="stylesheet">
	<link href="/themes/admin/css/custom.css" rel="stylesheet">
	<link href="/themes/admin/css/style-responsive.css" rel="stylesheet"/>
	<!--Core js-->
	<script src="/themes/admin/js/jquery.js"></script>
	<script src="/themes/admin/css/bs3/js/bootstrap.min.js"></script>
	<script src="/themes/admin/js/jquery.nicescroll.js"></script>
	<!--common script init for all pages-->
	<script src="/themes/admin/js/scripts.js"></script>
	<script src="/themes/admin/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="/themes/admin/js/advanced-form.js"></script>
	<script src="/themes/admin/js/bootstrap-switch.js"></script>
	<script src="/themes/admin/js/toggle-init.js"></script>	
	
	<!-- js & css for tree styles -->
	<link rel="stylesheet" type="text/css" href="/themes/admin/js/fuelux/css/tree-style.css">
	<script src="/themes/admin/js/fuelux/js/tree.min.js"></script>	
	<!-- gns custom js -->
	<script src="/themes/admin/js/custom.js"></script>	

	<!--Additional js-->
	<script src="//cdn.ckeditor.com/4.4.5/full/ckeditor.js"></script>
</head>
<body>
	<!--header start-->
	<header class="header fixed-top clearfix">
	<!--logo start-->
		<div class="brand">
			<a href="<?=Yii::app()->params['adminUrl']?>/" class="logo">
				<p><img src="/themes/admin/images/logo.png" style="width: 170px;"></p>
			</a>
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars"></div>
			</div>
		</div>
	<!--logo end-->
		<div class="nav notify-row" id="top_menu">
			<!--  notification goes here -->
		</div>
		<div class="top-nav clearfix">
			<!--search & user info goes here-->
			<ul class="nav pull-right top-menu">
<!-- 				<li class="dropdown language">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" src="/themes/admin/images/flags/<?php echo Yii::app()->language?>.png">
						<span class="username"><?php echo strtoupper(Yii::app()->language) ?></span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?=Yii::app()->params['adminUrl']?>/mainpage/language/?l=ru">
							<img alt="" src="/themes/admin/images/flags/ru.png"> <?=Yii::t('adminModule.app','Русский')?>
						    </a>
						</li>
						<li>
							<a href="<?=Yii::app()->params['adminUrl']?>/mainpage/language/?l=en">
							<img alt="" src="/themes/admin/images/flags/en.png"> <?=Yii::t('adminModule.app','Английский')?>
							</a>
						</li>
					</ul>
				</li> -->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<img alt="" src="/themes/admin/images/avatar1_small.jpg">
						<span class="username"><?=Yii::app()->user->name?></span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu extended logout">
						<li><a href="<?=Yii::app()->params['adminUrl']?>/mainpage/logout/">
							<i class="fa fa-key"></i><?=Yii::t('adminModule.app','Выход')?></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</header>
	<!--header end-->
	<!--sidebar start-->
    <?php 
    	$this->beginWidget('AdminMenuWidget',array( 'action' => Yii::app()->getController()->getId() ));
    	$this->endWidget(); 
    ?>	
	<!--sidebar end-->
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
		<!-- page start-->
		<?php echo $content; ?>
		<!-- page end-->
		</section>
	</section>
	<!--main content end-->
</body>
</html>