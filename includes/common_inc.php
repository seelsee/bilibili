<?php

//防止恶意调用
if(!defined('IN_TG')){
	exit('Access Defined!');
}
//设置字符集编码
header('Content-Type:text/html;charset=utf-8');
//转换硬路径常量
define('ROOT_PATH', substr(dirname(__FILE__),0,-8));
//创建一个自动转义状态的常量
define('GPC',get_magic_quotes_gpc());


//引入核心函数库
require ROOT_PATH.'/includes/global_func.php';
require ROOT_PATH.'/includes/mysql_func.php';
//数据库连接
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '123456');
define('DB_NAME', 'sys'); 

//创建数据库连接
_connect(); 
//选择一款数据库
_select_db();
//选择字符集
_set_names();

?>