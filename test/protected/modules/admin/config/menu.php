<?php
return array(
	'menu' => array(
	    0 => array(
	        'name' => 'Администраторы',
	        'icon' => 'user-md',
	        'url' => 'admins',
	        'auth' => 'root',
	        'visible' => true,
	    ),
	    10 => array(
	        'name' => 'Тексты',
	        'icon' => 'file-text-o',
	        'url' => 'blocks',
	        'auth' => 'moderator',
	        'visible' => true,
	    ),	    
	    20 => array(
	        'name' => 'Команда',
	        'icon' => 'users',
	        'url' => 'team',
	        'auth' => 'moderator',
	        'visible' => true,
	    ),	    
	    30 => array(
	        'name' => 'Проекты',
	        'icon' => 'list',
	        'url' => 'projects',
	        'auth' => 'user',
	        'visible' => true,
	    ),	    
	    40 => array(
	        'name' => 'Публикации',
	        'icon' => 'list',
	        'url' => 'publications',
	        'auth' => 'user',
	        'visible' => true,
	    ),	 	    
	)
);
?>