<link rel="stylesheet" type="text/css" href="/themes/admin/js/jquery-tags-input/jquery.tagsinput.css">
<script src="/themes/admin/js/jquery-tags-input/jquery.tagsinput.js"></script>
<script src="/themes/admin/js/jcrop/js/jquery.Jcrop.min.js"></script>
<script src="/themes/admin/js/imageCropCustom.js"></script> <!-- my custom script -->
<link rel="stylesheet" href="/themes/admin/js/jcrop/css/jquery.Jcrop.css" type="text/css" />

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
        'enctype' => 'multipart/form-data',
        'enableAjaxValidation'=>false,
    ),	
)); ?>		
        <div class="form-group">
            <?php echo $form->labelEx($model,'type', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo CHtml::dropDownList('Projects[type]', $model->type, array(1 => 'Архитектура', 2 => 'Дизайн'), 
                           array('class'=>'form-control m-bot15'));
                ?>
                <p><?php echo $form->error($model,'type',array('class'=>'text-danger')); ?></p>
            </div>
        </div>  

		<div class="form-group">
			<?php echo $form->labelEx($model,'name', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
			<div class="col-lg-10">
                <?php echo $form->textField($model,'name',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Имя'), 'maxlength'=>255)
                );?>				
				<p><?php echo $form->error($model,'name',array('class'=>'text-danger')); ?></p>
			</div>
		</div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'location', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model,'location',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Местоположение'), 'maxlength'=>255)
                );?>                
                <p><?php echo $form->error($model,'location',array('class'=>'text-danger')); ?></p>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'body', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textArea($model,'body',array('class'=>'form-control')); ?>                
                <p><?php echo $form->error($model,'body',array('class'=>'text-danger')); ?></p>
            </div>
        </div>      

        <!-- work with Image1 with crop -->
        <!-- for more images copy and replace mainImg1>mainImg2, imgOptions1>imgOptions2, imgCropOption1>imgCropOption2 e.t.c. -->
        <div class="form-group">
            <?php echo $form->labelEx($model,'img', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-md-10">
            	<?php if ($model->img != ''){ ?>
            		<div class="fileupload-new thumbnail" style="text-align:center;">
                        <img src="/uploads/<?=$this->id?>/<?=$model->img?>" alt="" style="height: 150px;" id="mainImg1">
                        <span id="imgOptions1">
                        	<input type="hidden" value="0" name="delimg">
                        	<input class="iCheck-helper" name="delimg" id="delimg1" value="1" type="checkbox"> <label for="delimg1">Удалить</label> 
                            <i class="fa fa-crop"></i> <a href="javascript: cropImage('mainImg1', <?php if(isset($size[0])) echo $size[0] ?>, <?php if(isset($size[1])) echo $size[1] ?>, 1)" class="undrlne" id="cropLink1">Обрезать</a>
                        </span>
                        <span id="imgCropCancel1" style="display:none;">
                            <i class="fa fa-times"></i> <a href="javascript: cancelCrop('mainImg1')" class="undrlne">Отменить</a>
                        </span>
                        <span id="imgCropOption1" style="display:none;">
                           | <i class="fa fa-save"></i> <a href="javascript: saveCrop('<?=$this->id?>', '/uploads/<?=$this->id?>/<?=$model->img?>', 'mainImg1')" class="undrlne">Сохранить</a>
                            (W:<span id="imgW1"></span> / H:<span id="imgH1"></span>)
                        </span>
                    </div>
            	<?php } ?>
                <?php echo CHtml::activeFileField($model, 'image'); ?>
                <p><?php echo $form->error($model,'img',array('class'=>'text-danger')); ?></p>
            </div>
        </div>	        

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label required" >Лучший</label>
            <div class="col-lg-10 toggle-heading" style="height:23px">
            <?php echo $form->checkBox($model,'best', 
                array('class'=>'switch-small', 
                      'data-on'=>"success", 
                      'data-off'=>"danger", 
                      'data-on-label'=>Yii::t('adminModule.app','Да'),  
                      'data-off-label'=>Yii::t('adminModule.app','Нет')
                    )); 
            ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label required" ></label>
            <div class="col-lg-10 toggle-heading" style="height:23px">
            <?php echo $form->checkBox($model,'status', 
                array('class'=>'switch-small', 
                      'data-on'=>"success", 
                      'data-off'=>"danger", 
                      'data-on-label'=>Yii::t('adminModule.app','Вкл'),  
                      'data-off-label'=>Yii::t('adminModule.app','Выкл')
                    )); 
            ?>
            </div>
        </div>
        
		<div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
               <button type="submit" class="btn btn-info"><?php echo ($model->isNewRecord ? 'Создать' : 'Сохранить') ?></button>
            </div>
        </div>
<?php $this->endWidget(); ?>

<?php if(!$model->isNewRecord) {?>

<div style="border:1px solid gray"></div>

<h2>Изображения</h2>

<div class="row">
<?php
$i=2;
foreach($model->getPhotosList($model->id) as $val) { ?>
    <div class="col-md-3 fileupload-new thumbnail" style="text-align:center;">
        <div class="row">
        	<div class="fileupload-new thumbnail" style="text-align:center;">
                	<img src="/uploads/projects/list/<?=$model->id?>/<?=$val?>" width="80%" id="Img<?= $i; ?>">
                        <span id="imgOptions<?= $i; ?>">
                        	<input type="hidden" value="0" name="delimg">
                        	<a href="/admin/publications/delimg/?id=<?=$model->id?>&img=<?=$val?>" onclick="return confirmItemDelete();">Удалить</a>
                             <i class="fa fa-crop"></i> <a href="javascript: cropImage('Img<?= $i; ?>', <?php if(isset($size[0])) echo $size[0] ?>, <?php if(isset($size[1])) echo $size[1] ?>, <?= $i; ?>)" class="undrlne" id="cropLink<?= $i; ?>">Обрезать</a>
                        </span>
                        <span id="imgCropCancel<?= $i; ?>" style="display:none;">
                            <i class="fa fa-times"></i> <a href="javascript: cancelCrop('Img<?= $i; ?>')" class="undrlne">Отменить</a>
                        </span>
                        <span id="imgCropOption<?= $i; ?>" style="display:none;">
                           | <i class="fa fa-save"></i> <a href="javascript: saveCrop('<?=$this->id?>', '/uploads/projects/list/<?=$model->id?>/<?=$val?>', 'Img<?= $i; ?>')" class="undrlne">Сохранить</a>
                            (W:<span id="imgW<?= $i; ?>"></span> / H:<span id="imgH<?= $i; ?>"></span>)
                        </span>
            </div>
        <!--<img src="/uploads/projects/list/<?=$model->id?>/<?=$val?>" width="80%">-->
        </div>
        <!--<a href="/admin/projects/delimg/?id=<?=$model->id?>&img=<?=$val?>" onclick="return confirmItemDelete();">Удалить</a>-->
    </div>
    <?php $i++; ?>
<?php } ?>
</div>

<h3>Добавить новое изображение</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'items-form',
    'action' => Yii::app()->createUrl('/admin/projects/imglistadd'),
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
        'enctype' => 'multipart/form-data',
        'enableAjaxValidation'=>false,
    ),  
)); ?>      
        <input type="hidden" name="id" value="<?=$model->id?>">
        <div class="form-group">
            <div class="col-md-10">
                <?php echo CHtml::activeFileField($model, 'image',array('multiple'=>'multiple')); ?>
                <p><?php echo $form->error($model,'img',array('class'=>'text-danger','multiple'=>'multiple')); ?></p>
            </div>
        </div>          
        
        <div class="form-group">
            <div class="col-lg-12">
               <button type="submit" class="btn btn-info"><?php echo ($model->isNewRecord ? 'Создать' : 'Добавить') ?></button>
            </div>
        </div>
<?php $this->endWidget(); 
}
?>
