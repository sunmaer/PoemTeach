<?php
/* Smarty version 3.1.30, created on 2016-09-07 03:58:34
  from "D:\wamp\www\School\School\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57cf744ae5d441_64206243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73e391a98a69db139f48bc8702f5b8d332603e2a' => 
    array (
      0 => 'D:\\wamp\\www\\School\\School\\templates\\index.html',
      1 => 1473169349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57cf744ae5d441_64206243 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="short icon" href="<?php echo @constant('tem');?>
img/favicon.ico">
    <!-- Bootstrap -->
    <link href="<?php echo @constant('tem');?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @constant('tem');?>
css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-3 hidden-xs" id="bg"></div>
        <div class="col-md-8 col-sm-9 col-xs-12  col">
          <header id="header">
            <div class="row mar">
              <div class="col-md-6 col-sm-6 col-xs-8">
                <h4>嵊州市城南小学特色校本课程</h4>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-4">
                <img src="<?php echo @constant('tem');?>
img/img4.jpg" class="img-responsive pull-right" alt="精灵图片">
              </div>
            </div>
          </header>
          <div class="title">
            越韵古诗
          </div>
          <nav>
            <ul class="nav nav-pills">
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">一年级</a>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oneDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[0];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">二年级</a>
                <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['twoDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[1];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colortf" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">三年级</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threeDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[2];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colortf" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">四年级</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fourDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[3];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colorfs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">五年级</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiveDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[4];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colorfs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">六年级</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sixDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[5];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">课外（低）</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lowDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[6];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colortf" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">课外（中）</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['midDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[7];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle button colorfs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">课外（高）</a>
                <ul class="dropdown-menu">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['senDir']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
					<li><a href="poem.php?action=index&file=<?php echo $_smarty_tpl->tpl_vars['G']->value[8];?>
&name=<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('tem');?>
js/jquery-3.0.0.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('tem');?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(function(){
        // alert($(window).height());
        $("#bg").height($(window).height()); 　//浏览器时下窗口可视区域高度 
        $(window).resize(function() {
          $("#bg").height($(window).height());
        });
      });
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
