<?php
/**
 *诗
 */
require "file.class.php";
$P=unserialize(P);
$action=$_GET['action'];
$file=$_GET['file'];
$poemName=$_GET['name'];
$filePath=Resource.'/'.$file.'/'.$poemName;
$smarty->assign('file',$file);
$smarty->assign('name',$poemName);
if ($action=='index') {
	$f1=new file($filePath);
	$dir=$f1->getDir();
	$urls=$f1->classifyFile($dir,$P,$filePath);
	// var_dump($urls);
	$smarty->assign('dir',$urls);

	//将地址传到html页面，便于js获取
	echo "<p class='wkjx'>{$urls['微课教学']}</p>";
	echo "<p class='sxqp'>{$urls['手写曲谱']}</p>";
	echo "<p class='bzyy'>{$urls['伴奏音乐']}</p>";
	echo "<p class='fcyy'>{$urls['范唱音乐']}</p>";
	echo "<p class='xxxc'>{$urls['学生学唱']}</p>";
	echo "<p class='gsnb'>{$urls['古诗念白']}</p>";
	echo "<p class='czyt'>{$urls['谢教授']}</p>";
	echo "<p class='txc'>{$urls['竺外婆']}</p>";
	echo "<p class='yjsp'>{$urls['应景视频']}</p>";
	echo "<p class='cylj'>{$urls['越韵链接']}</p>";
	echo "<p class='gspt'>{$urls['古诗配图']}</p>";

	$smarty->assign('yjsp',$urls['应景视频']);
	$smarty->assign('gspt',$urls['古诗配图']);
	$smarty->display('show.html');
}
?>