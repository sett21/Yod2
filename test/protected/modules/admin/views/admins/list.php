<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading h60">
            <div class="col-lg-3"><?=Yii::t('adminModule.app','Администраторы')?></div>

	    	<form action="" class="col-lg-6">
			<div class="col-lg-12">
			    <div class="input-group input-group-sm m-bot15">
			        	<span class="input-group-addon btn-success"><i class="fa fa-search"></i></span>
			        	<input type="text" name="search" class="form-control" placeholder="<?=Yii::t('adminModule.app','Поиск')?>" value="<?php if( isset($_GET['search']) ) echo htmlspecialchars($_GET['search']) ?>">
			    </div>
			</div>
	    	</form>

            <div class="btn-group pull-right col-rg-3">
					<button type="button" class="btn btn-info btn-xs" 
						onclick="javascript:location.href='<?php echo Yii::app()->params['adminUrl'] . '/' . $this->id . '/create/'?>'">
						<?=Yii::t('adminModule.app','Добавить позицию')?> <i class="fa fa-plus"></i>
					</button>
			</div>
        </div>
        <div class="panel-body">
<?php 
	$this->beginWidget('ItemsListWidget',array( 
		'items' => $model->search(), 
		'columns'=>array(
			'id',
			'login',
			'name',
			'role',
		),
		'model'=>$model,	
	));
	$this->endWidget(); 
?>	        
        </div>
    </div>
</div>