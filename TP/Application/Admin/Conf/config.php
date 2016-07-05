<?php
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'  =>  'mysql',
		'DB_HOST'  =>  'localhost',
		'DB_NAME'  =>  'bbssmall',
		'DB_USER'  =>  'root',
		'DB_PWD'   =>  '',
		'DB_PREFIX'=>  'bbs_',
		'LAYOUT_ON'=>true,
		'TMPL_L_DELIM' =>'<!--{',
		'TMPL_R_DELIM' =>'}-->',
		'LAYOUT_NAME'=>'layout',
		'TMPL_PARSE_STRING' =>array(
				'__PROJECT_NAME__'=>"小型BBS",
				'__TPVIEW__'=>"Application/Home/View/",
					
		),
);