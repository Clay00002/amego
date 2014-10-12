<?php /* Smarty version Smarty-3.1.20, created on 2014-10-12 10:15:25
         compiled from "views\home.html" */ ?>
<?php /*%%SmartyHeaderCode:26121543a2b9906c044-05298037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '776de04f13251af0e9c6e315e758245d5698c982' => 
    array (
      0 => 'views\\home.html',
      1 => 1413101524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26121543a2b9906c044-05298037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543a2b990f4be8_32816746',
  'variables' => 
  array (
    'receiver' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a2b990f4be8_32816746')) {function content_543a2b990f4be8_32816746($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	</head>
	<body>
	<p>Hello, <?php echo $_smarty_tpl->tpl_vars['receiver']->value;?>
! It's <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 today!</p>
        </body>
</html><?php }} ?>
