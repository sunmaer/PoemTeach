<?php
/* Smarty version 3.1.30, created on 2016-08-28 11:13:04
  from "E:\wamp\wamp\www\School\templates\video.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c2ab204f3261_81711722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a50ec4ff48ecd6427ea53e37991e31993b3312bd' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\School\\templates\\video.html',
      1 => 1472375583,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57c2ab204f3261_81711722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>越韵古诗</title>
    <meta name="description" content="嵊州市城南小学特色校本课程越韵古诗教学">
    <meta name="keywords" content="越韵古诗教学">
    <link rel="short icon" href="http://localhost/School/templates/img/favicon.ico">
    <!-- Bootstrap -->
    <link href="http://localhost/School/templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/School/templates/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://localhost/School/templates/video/css/mediaelementplayer.css" />
    <link rel="stylesheet" href="http://localhost/School/templates/video/css/mejs-skins.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row pad">
        <header id="v-header">
          <h2><span class="hidden-xs">越韵古诗——（</span> <span class="blue">一去二三里</span> <span class="hidden-xs">）</span></h2>
          <img src="http://localhost/School/templates/img/img4.jpg" class="pull-right hidden-xs" alt="精灵图片">
        </header>
        <section>
          <div class="wrap">
            <video class="mejs-wmp" tyle="margin: 0 auto;" width="100%" height="500px" type="video/mp4" id="player1" poster="http://localhost/School/Resource/一年级/一去二三里/【古诗配图】1 一去二三里-图文.jpg" controls="controls" preload="none">
            <source src="http://localhost/School/Resource/一年级/一去二三里/[应景视频]1一上-一去二三里-尺调-任品萱张毅柔-字幕.mp4">
            </video>
          </div>
        </section>
        <div class="btngroup">
          <a href="" class="btn">微课教学</a>
          <a href="" class="btn">曲谱</a>
          <a href="" class="btn">手写曲谱</a>
          <a href="" class="btn">伴奏音乐</a>
          <a href="" class="btn">范唱音乐</a>
          <a href="" class="btn">古诗念白</a>
          <a href="" class="btn">谢教授聊创作意图</a>
          <a href="" class="btn">竺奶奶谈学唱</a>
          <a href="" class="btn">应景视频</a>
          <a href="" class="btn">楚韵链接</a>
          <a href="" class="btn">古诗配图</a>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/School/templates/js/jquery-3.0.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/School/templates/js/bootstrap.min.js"></script>
    <script src="http://localhost/School/templates/video/js/mediaelement-and-player.min.js"></script> 
    <script type="text/javascript">
      $('audio,video').mediaelementplayer({
        success: function(player, node) {
          $('#' + node.id + '-mode').html('mode: ' + player.pluginType);
        }
      });
    </script>
  </body>
</html><?php }
}
