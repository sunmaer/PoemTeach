<?php
Header('content-Type:text/html;charset=utf-8');
// 引入smarty模板引擎
require "init.inc.php";
// 引入配置文件
require "./configs/config.php";
/**
 * 基类，处理函数
 */
class Base{
	//将jbk转换为utf-8，中文乱码
	function utfChar($ch){
		if (is_array($ch)) {
			for ($i=0; $i <count($ch) ; $i++) { 
				$ch[$i]=iconv("utf-8","gbk",$ch[$i]);
			}
		}else{
			$ch = iconv("utf-8","gbk",$ch);
		}
		return $ch;
	}
	// 将utf-8装换为gbk
	function gbkChar($ch){
		if (is_array($ch)) {
			for ($i=0; $i <count($ch) ; $i++) { 
				$ch[$i]=iconv("gbk","utf-8",$ch[$i]);
			}
		}else{
			$ch = iconv("gbk","utf-8",$ch);
		}
		return $ch;
	}
	// 判断文件类别
	function getType($dir){
		$type = substr($dir,strrpos($dir,'.')); 
		return $type;
	}
}