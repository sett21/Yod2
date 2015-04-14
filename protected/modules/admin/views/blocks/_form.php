<script src="/themes/admin/js/advanced-form.js"></script>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'items-form',
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
        'enctype' => 'multipart/form-data',
        'enableAjaxValidation'=>false,
    ),
)); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model,'name', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model,'name',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Название'), 'maxlength'=>255)
                );?>                
                <p><?php echo $form->error($model,'name',array('class'=>'text-danger')); ?></p>
            </div>
        </div>

    <div class="form-group">
      <?php echo $form->labelEx($model,'body', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
      <div class="col-lg-10">
              <?php echo $form->textArea($model,'body',array('class'=>'form-control')); ?>
        <p><?php echo $form->error($model,'body',array('class'=>'text-danger')); ?></p>
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


<script>
    // CKEDITOR.replace( 'Blocks_body' );
</script>

<?php $this->endWidget(); ?>