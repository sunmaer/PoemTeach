<?php
/**
 * 首页
 */
	require "file.class.php";
	$f = new file(Resource);
	$G=unserialize(G);
	$smarty->assign('G',$G);
// 资源根目录下路径
	$dirPath=$f->getDirPath();
// 根目录下文件名（年级）
	$grade=$f->getDir();
// 一年级
	$oneDir=$f->getGrade($grade,$dirPath,$G[0]);
// 二年级
	$twoDir=$f->getGrade($grade,$dirPath,$G[1]);
// 三年级
	$threeDir=$f->getGrade($grade,$dirPath,$G[2]);
// 四年级
	$fourDir=$f->getGrade($grade,$dirPath,$G[3]);
// 五年级
	$fiveDir=$f->getGrade($grade,$dirPath,$G[4]);
// 六年级
	$sixDir=$f->getGrade($grade,$dirPath,$G[5]);
// 课外(低)
	$lowDir=$f->getGrade($grade,$dirPath,$G[6]);
// 课外(中)
	$midDir=$f->getGrade($grade,$dirPath,$G[7]);
// 课外(高)
	$senDir=$f->getGrade($grade,$dirPath,$G[8]);
	$smarty->assign("oneDir",$oneDir);
	$smarty->assign("twoDir",$twoDir);
	$smarty->assign("threeDir",$threeDir);
	$smarty->assign("fourDir",$fourDir);
	$smarty->assign("fiveDir",$fiveDir);
	$smarty->assign("sixDir",$sixDir);
	$smarty->assign("lowDir",$lowDir);
	$smarty->assign("midDir",$midDir);
	$smarty->assign("senDir",$senDir);
	$smarty->display("index.html");
 
