<?php
return array(
	'URL_CASE_INSENSITIVE'	=>  true,  		// URL 不区分大小写
	'URL_MODEL'			=> '2', 			//URL模式 rewrite
	'DEFAULT_MODULE'		=> 'Home', 		//默认模块

	'DB_TYPE'	=> 'mongo',
	'DB_HOST'	=> 'localhost',
	'DB_NAME'	=> 'blog',
	'DB_USER'	=> '',
	'DB_PWD'	=> '',
	'DB_PORT'	=> 27017,
	'DB_PREFIX'	=> '',
	'DB_CHARSET'	=> 'utf8',
	'DB_DEBUG'	=>  TRUE,



	'URL_ROUTER_ON'   	=> true,
	'URL_ROUTE_RULES'=>array(
		'blog' => 'Home/Index/blog',
		'p/:id' => 'Home/Index/detail',
		'tag/:tag' => 'Home/Index/get_tags',
		'joke' => 'Home/Index/joke',
		'joke/p/:p' => 'Home/Index/joke',
		'share' => 'Home/Index/share',
	),
);
