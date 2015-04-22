<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png">

    <!--Core CSS -->
    <link href="/themes/admin/css/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="/themes/admin/css/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/themes/admin/css/style.css" rel="stylesheet">
    <link href="/themes/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
  <body class="login-body">
    <div class="container">
        <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
       'htmlOptions'=>array(
            'class'=>'form-signin',
        ),
        )); ?>

        <h2 class="form-signin-heading"><?=Yii::t('adminModule.app','Вход');?></h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <?php echo $form->textField($model,'username', 
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Логин'), 'autofocus' => true)); 
                ?>
                <!-- <input type="text" class="form-control" placeholder="User ID" autofocus> -->
                <?php echo $form->passwordField($model,'password',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Пароль'))
                ); ?>
            </div>
            <label class="checkbox">
                <?php echo $form->checkBox($model,'rememberMe'); ?> <?=Yii::t('adminModule.app','Запомнить меня');?>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit"><?=Yii::t('adminModule.app','Войти');?></button>
        </div>
        
        <?php $this->endWidget(); ?>
    </div>
  </body>
</html>
