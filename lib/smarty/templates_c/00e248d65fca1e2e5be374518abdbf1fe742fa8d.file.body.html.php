<?php /* Smarty version Smarty-3.1.20, created on 2014-10-12 12:10:07
         compiled from "views\body.html" */ ?>
<?php /*%%SmartyHeaderCode:10421543a533e4d5eb8-05309482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e248d65fca1e2e5be374518abdbf1fe742fa8d' => 
    array (
      0 => 'views\\body.html',
      1 => 1413108478,
      2 => 'file',
    ),
    'e92d47f786e1be88827a869501eec222884eb081' => 
    array (
      0 => 'views\\layouts.html',
      1 => 1413108605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10421543a533e4d5eb8-05309482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543a533e5a10e5_39964564',
  'variables' => 
  array (
    'title' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a533e5a10e5_39964564')) {function content_543a533e5a10e5_39964564($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	</head>
	
	
<body>
	<p>Hello, <?php echo $_smarty_tpl->tpl_vars['receiver']->value;?>
! It's <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 today!</p>
</body>

        <footer>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

            </p>
        </footer>
</html><?php }} ?>
