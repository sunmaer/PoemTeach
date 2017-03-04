<?php
/**
 * 配置文件
 */
	// smarty引擎配置
	$smarty  = new Smarty();//实例化Smarty类的对象$smarty
	$smarty ->setTemplateDir(ROOT.'templates/')  //设置所有模板文件存放的目录
	//		->addTemplateDir(ROOT.'templates2/') //可以添加多个模板目录（前后台各一个）
			->setCompileDir(ROOT.'templates_c/') //设置所有编译过的模板文件存放的目录
			->setPluginsDir(ROOT.'plugins/') //设置为模板扩充插件存放的目录
			->setCacheDir(ROOT.'cache/')//设置缓存文件存放的目录
			->setConfigDir(ROOT.'configs');//设置模板配置文件存放的目录

	$smarty->caching = false; //设置Smarty缓存开关功能（因调用同一个文档，必须设置为false）
	$smarty->cache_lifetime = 60*60*1;//设置模板缓存有效时间段的长度为一小时
	$smarty->left_delimiter = '{';//设置模板语言中的左结束符
	$smarty->right_delimiter= '}';//设置模板语言中的右结束符
	// 定义资源根目录常量
	define("Resource","./Resource");
	//定义资源下子目录常量
	define('G', serialize(['一年级','二年级','三年级','四年级','五年级','六年级','课外(低)','课外(中)','课外(高)']));
	//定义古诗目录下常量，用于分类
	define('P', serialize(['古诗念白','微课教学','谢教授','应景视频','越韵链接','竺外婆','伴奏音乐','古诗配图','手写曲谱','学生学唱','范唱音乐']));
	$PHP_SELF=$_SERVER['PHP_SELF'];
	$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);
	define('tem',$url.'templates/');
	define('res',$url);