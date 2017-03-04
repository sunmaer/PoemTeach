<?php
/* Smarty version 3.1.30, created on 2016-09-06 13:38:43
  from "E:\wamp\wamp\www\School\templates\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ceaac32da727_71992338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86bbae3b5fb07573a1a9a4b9a687642016dca751' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\School\\templates\\show.html',
      1 => 1473074150,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57ceaac32da727_71992338 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- 视频播放器 -->
    <link rel="stylesheet" href="http://localhost/School/templates/video/css/mediaelementplayer.css" />
    <link rel="stylesheet" href="http://localhost/School/templates/video/css/mejs-skins.css" />
    <!-- 图片查看 -->
    <link href="http://localhost/School/templates/css/photoswipe.css" rel="stylesheet">
    <link href="http://localhost/School/templates/css/default-skin/default-skin.css" rel="stylesheet">

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
            <video class="mejs-wmp" src="http://localhost/School/Resource/一年级/一去二三里/[应景视频]1一上-一去二三里-尺调-任品萱张毅柔-字幕.mp4" style="margin: 0 auto;" width="100%" height="500px" type="video/mp4" id="player1" poster="http://localhost/School/Resource/一年级/一去二三里/【古诗配图】1 一去二三里-图文.jpg" controls="controls" autoplay="autoplay" preload="none">
            </video>
          </div>

          <div class="wrapper">
             <div id="demo-test-gallery" class="demo-gallery">
                <a href="http://localhost/School/Resource/一年级/一去二三里/【古诗配图】1 一去二三里-图文.jpg" data-size="1600x1600" data-med="http://localhost/School/Resource/一年级/一去二三里/【古诗配图】1 一去二三里-图文.jpg" data-med-size="1024x1024">
                  <img class="img-responsive" src="http://localhost/School/Resource/一年级/一去二三里/【古诗配图】1 一去二三里-图文.jpg" alt="一去二三里">
                </a>
            </div>
            <div class="audio">
              <audio controls="controls" src="http://localhost/School/Resource/一年级/一去二三里/【伴奏音乐】1一去二三里》伴奏.mp3" width="100%" type="audio/mpeg" >
                您的浏览器不支持播放音乐，请更换浏览器！
              </audio>
            </div>
            
          </div>
          
        </section>
        <div class="btngroup">
          <button id="wkjx" class="btn">微课教学</button>
          <button id="sxqp" class="btn">手写曲谱</button>
          <button id="bzyy" class="btn">伴奏音乐</button>
          <button id="fcyy" class="btn">范唱音乐</button>
          <button id="gsnb" class="btn">古诗念白</button>
          <button id="czyt" class="btn">谢教授聊创作意图</button>
          <button id="txc" class="btn">竺奶奶谈学唱</button>
          <button id="yjsp" class="btn">应景视频</button>
          <button id="cylj" class="btn">楚韵链接</button>
          <button id="gspt" class="btn">古诗配图</button>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/School/templates/js/jquery-3.0.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/School/templates/js/bootstrap.min.js"></script>
    <script src="http://localhost/School/templates/video/js/mediaelement-and-player.min.js"></script>

    <script src="http://localhost/School/templates/js/photoswipe.js"></script>
    <script src="http://localhost/School/templates/js/photoswipe.min.js"></script>
    <script src="http://localhost/School/templates/js/photoswipe-ui-default.min.js"></script>

    <script type="text/javascript">
      $('audio,video').mediaelementplayer({
        success: function(player, node) {
          $('#' + node.id + '-mode').html('mode: ' + player.pluginType);
        }
      });
      $(function(){

        //隐藏音乐播放器
        $(".audio").hide();

        //微课教学视频播放
        $("#wkjx").click(function(){

          //隐藏图片查看
          $(".wrapper").css("display","none");

          //显示视频播放器
          $("video").get(0).muted = false;  //打开视频的声音
          $(".wrap").css("display","block");

          //设置视频链接
          $(".mejs-wmp").attr("src","http://localhost/School/"+$(".wkjx").text());

        });

        //古诗念白视频播放
        $("#gsnb").click(function(){

          //隐藏图片查看
          $(".wrapper").css("display","none");

          //显示视频播放器
          $("video").get(0).muted = false;  //打开视频的声音
          $(".wrap").css("display","block");

          //设置视频链接
          $(".mejs-wmp").attr("src","http://localhost/School/"+$(".gsnb").text());

        });

        //谢教授聊创作意图视频播放
        $("#czyt").click(function(){

          //隐藏图片查看
          $(".wrapper").css("display","none");

          //显示视频播放器
          $("video").get(0).muted = false;  //打开视频的声音
          $(".wrap").css("display","block");

          //设置视频链接
          $(".mejs-wmp").attr("src","http://localhost/School/"+$(".czyt").text());

        });

        //应景视频播放
        $("#yjsp").click(function(){

          //隐藏图片查看
          $(".wrapper").css("display","none");

          //显示视频播放器
          $("video").get(0).muted = false;  //打开视频的声音
          $(".wrap").css("display","block");

          //设置视频链接
          $(".mejs-wmp").attr("src","http://localhost/School/"+$(".yjsp").text());

        });

        //手写曲谱显示
        $("#sxqp").click(function(){

          //隐藏、关闭音乐播放器
          $(".audio").hide();
          $("audio").get(0).pause();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".sxqp").text(),
            "data-med":"http://localhost/School/"+$(".sxqp").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".sxqp").text());
        });

        //竺奶奶谈学唱显示
        $("#txc").click(function(){

          //隐藏、关闭音乐播放器
          $(".audio").hide();
          $("audio").get(0).pause();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".txc").text(),
            "data-med":"http://localhost/School/"+$(".txc").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".txc").text());
        });

        //楚韵链接显示
        $("#cylj").click(function(){

          //隐藏、关闭音乐播放器
          $(".audio").hide();
          $("audio").get(0).pause();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".cylj").text(),
            "data-med":"http://localhost/School/"+$(".cylj").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".cylj").text());
        });

        //古诗配图显示
        $("#gspt").click(function(){

          //隐藏、关闭音乐播放器
          $(".audio").hide();
          $("audio").get(0).pause();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".gspt").text(),
            "data-med":"http://localhost/School/"+$(".gspt").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".gspt").text());
        });

        //伴奏音乐播放
        $("#bzyy").click(function(){

          //显示音乐播放器
          $(".audio").show();

          //设置音乐链接
          $("audio").get(0).pause();
          $("audio").attr("src","http://localhost/School/"+$(".bzyy").text());
          $("audio").get(0).play();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".gspt").text(),
            "data-med":"http://localhost/School/"+$(".gspt").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".gspt").text());
        });

        //范唱音乐播放
        $("#fcyy").click(function(){

          //显示音乐播放器
          $(".audio").show();

          //设置音乐链接
          $("audio").get(0).pause();
          $("audio").attr("src","http://localhost/School/"+$(".fcyy").text());
          $("audio").get(0).play();

          //显示图片查看
          $(".wrapper").css("display","block");

          //隐藏视频播放器
          $("video").get(0).muted = true;  //关闭视频的声音
          $(".wrap").css("display","none");
          
          //设置图片链接
          $(".demo-gallery a").attr({
            "href":"http://localhost/School/"+$(".gspt").text(),
            "data-med":"http://localhost/School/"+$(".gspt").text()
          });
          $(".demo-gallery a img").attr("src","http://localhost/School/"+$(".gspt").text());
        });

      });

    </script>
  </body>
</html><?php }
}
