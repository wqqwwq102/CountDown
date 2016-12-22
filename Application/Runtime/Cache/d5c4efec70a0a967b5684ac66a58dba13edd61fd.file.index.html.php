<?php /* Smarty version Smarty-3.1.6, created on 2016-12-21 12:43:14
         compiled from "./Application/Home/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:15439390645858e85e560c58-62471065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c4efec70a0a967b5684ac66a58dba13edd61fd' => 
    array (
      0 => './Application/Home/View/Index/index.html',
      1 => 1482295375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15439390645858e85e560c58-62471065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5858e85e6213d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5858e85e6213d')) {function content_5858e85e6213d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
	<title>倒计时</title>
	<script src="http://www.macsgl.cn/Public/js/time.js"></script>
</head>
<body>
<center>
<font size = 24px>距离下班还有</font>
<font size = 50px  color = "red">
<center><h1><br/><strong id="RemainH">XX</strong>:<strong id="RemainM">XX</strong>:<strong id="RemainS">XX</strong></h1>   </center> 
</font>
</center>
</body>
</html><?php }} ?>