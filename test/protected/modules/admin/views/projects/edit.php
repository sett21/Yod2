
<div class="row"> 
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<?=Yii::t('adminModule.app','Проекты')?> - 
				<?php echo ($model->isNewRecord ? Yii::t('adminModule.app','Добавление') : Yii::t('adminModule.app','Правка')) ?>
				<span class="tools pull-right">
					<button type="button" class="btn btn-info btn-xs" 
						onclick="javascript:location.href='<?php echo Yii::app()->params['adminUrl'] . '/' . $this->id . '/'?>'">
						<?=Yii::t('adminModule.app','Список позиций')?>
					</button>
				 </span>
			</header>
			<div class="panel-body">
				<div class="position-center">
					<?php $this->renderPartial('_form', array('model'=>$model, 'size'=>$size)); ?>
				</div>
			</div>
		</section>
	</div>
</div>
