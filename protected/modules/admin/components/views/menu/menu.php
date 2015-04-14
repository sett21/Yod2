<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu goes here-->
		<ul class="sidebar-menu" id="nav-accordion">
		<?php
		 	foreach (Yii::app()->params['menu'] as $menuItem)
		 	{
		 		if (Yii::app()->user->checkAccess($menuItem['auth']) && $menuItem['visible'])
		 		{
		 			$class = '';
		 			if($parametrs['action'] == $menuItem['url'])
		 				$class = 'active';

					/*Sub Menu generating first*/
					$submenu = '';
					if(isset($menuItem['parent']))
					{
						$submenu .= '<ul class="sub" style="display: none;">';
						
						foreach ($menuItem['parent'] as $subMenu)
						{

							$subclass = '';
				 			if ($parametrs['action'] == $subMenu['url']){
				 				$subclass = 'active';
				 				$class = 'active';
				 			}

							$submenu .= '<li class="'.$subclass.'">
											<a href="' . Yii::app()->params['adminUrl'] . '/' . $subMenu['url'] . '/">
												<i class="fa fa-' . $subMenu['icon'] . '"></i>
												'.Yii::t('adminModule.app',$subMenu['name']).'
											</a>
										</li>';
						}

						$submenu .= '</ul>';
					}

					/*Menu generating*/
		 			echo '<li class="sub-menu dcjq-parent-li">';
		 			if($submenu == '') 
		 				echo '	<a href="' . Yii::app()->params['adminUrl'] . '/' . $menuItem['url'] . '/" class="'.$class.'">';
		 			else
		 				echo '	<a href="javascript:;" class="dcjq-parent '.$class.'">';
					echo '		<i class="fa fa-' . $menuItem['icon'] . '"></i>';
					echo '  	<span>' . Yii::t('adminModule.app',$menuItem['name']) . '</span>';
					echo '	</a>';
					echo $submenu;
					echo '</li>';
		 		}
		 	}
		?>
		</ul>
	</div>
</aside>

