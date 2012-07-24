<?php

//风格名字
$THEME->name = 'gzproject';
$THEME->parents = array('base');
$THEME->sheets = array(
    'core',     /** Must come first**/
    'admin',
    'blocks',
    'calendar',
    'course',
    'user',
    'dock',
    'grade',
    'message',
    'modules',
    'question',
    'css3'      /** Sets up CSS 3 + browser specific styles **/
);

$THEME->enable_dock = true;

//这里定义了哪个类型页面对应的模板文件
$THEME->layouts = array(
	'frontpage' => array(
		'file' => 'frontpage.php',
		'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
	),
);
