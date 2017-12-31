<?php
return array(
//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'   =>  'du', //修改文件后缀名，如果通过后缀名找寻文件，必须写设置的后缀名



//默认分组的设置
	'DEFAULT_MODULE'    =>  'Home', //默认模块
	'MODULE_ALLOW_LIST'  => array('Home','Admin'), //定义可访问的分组列表

//Smarty模板引擎替换
	'TMPL_ENGINE_TYPE'    =>  'Think', //默认模板引擎
 
	// 数据库设置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '47.95.221.25', // 服务器地址
    'DB_NAME'               =>  'cntx',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'password',          // 密码
    'DB_PORT'               =>  '',        // 端口  默认为3306
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8


);
