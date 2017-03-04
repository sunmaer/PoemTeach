<?php
/**
* 文件处理类
*/
include "Base.class.php";
class File extends Base
{
	private $path;
	function __construct($path)
	{
		$this->path=iconv("utf-8","gbk",$path);
	}
	// 获取下层所有文件名
	function getDir(){
		$dir=array();
		$i=0;
		$dh = @opendir($this->path);//打开目录
		while (($d=@readdir($dh))!=false) {
			if ($d!='.'&&$d!='..') {
				$dir[$i] =$d;
				$i++;
			}
		}
		$dir=$this->gbkChar($dir);
		return $dir;
	}
	// 获取所有文件路径
	function getDirPath(){
		$path=array();
		$i=0;
		$dh = @opendir($this->path);//打开目录
		while (($d=@readdir($dh))!=false) {
			if ($d!='.'&&$d!='..') {
				$path[$i] =$this->path.'/'.$d;
				$i++;
			}
		}
		$path=$this->gbkChar($path);
		return $path;
	}
	//古诗目录判别
	function poemClassify($dir,$p,$i,$filePath){
		for ($j=0; $j <count($dir); $j++) { 
			if (@strpos($dir[$j],$p[$i]) !== false) {
				$filePath = substr($filePath,2);
				return $filePath.'/'.$dir[$j];
			}
		}
	}
	// 将文件分类
	function classifyFile($dir,$P,$filePath){
		$file=array();
		for ($i=0; $i <count($dir);$i++) { 
			$file[$P[$i]]=$this->poemClassify($dir,$P,$i,$filePath);
		}
		return $file;
	}
	// 判断子目录
	function getGrade($grade,$dirPath,$G){
		for ($i=0; $i <count($grade); $i++) { 
			if (@strpos($grade[$i],$G) !== false) {
				$f=new file($dirPath[$i]);
				$gDir=$f->getDir();
			}
		}
		return $gDir;
	}
}