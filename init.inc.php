<?php
	/**
	*file:init.inc.php Smarty对象的引入
	*/
	define("ROOT", str_replace("\\", "/", dirname(__FILE__))."/");//指定项目的根路径
	require './libs/Smarty.class.php';//加载Smarty类文件
	