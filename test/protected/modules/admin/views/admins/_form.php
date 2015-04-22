<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
    ),	
)); ?>		
		<div class="form-group">
			<?php echo $form->labelEx($model,'login', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
			<div class="col-lg-10">
                <?php echo $form->textField($model,'login',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Логин'), 'maxlength'=>255)
                );?>				
				<p><?php echo $form->error($model,'login',array('class'=>'text-danger')); ?></p>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'password', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
			<div class="col-lg-10">
                <?php echo $form->passwordField($model,'password',
                      array('class'=>'form-control', 'placeholder'=>Yii::t('adminModule.app','Пароль'), 'value'=>'')
                );?>				
				<p><?php echo $form->error($model,'password',array('class'=>'text-danger')); ?></p>
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
			<?php echo $form->labelEx($model,'role', array('class'=>'col-lg-2 col-sm-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo CHtml::dropDownList('Admins[role]', $model->role, $model->roles, 
				array('class'=>'form-control m-bot15')
				);?>
				<p><?php echo $form->error($model,'role',array('class'=>'text-danger')); ?></p>
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