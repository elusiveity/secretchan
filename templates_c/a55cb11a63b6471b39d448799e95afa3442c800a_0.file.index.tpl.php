<?php
/* Smarty version 3.1.30, created on 2018-03-31 02:41:17
  from "/home/nukeground/public_html/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abef54d228304_62039046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55cb11a63b6471b39d448799e95afa3442c800a' => 
    array (
      0 => '/home/nukeground/public_html/templates/index.tpl',
      1 => 1522464075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abef54d228304_62039046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<div class='jumbotron'>
	<div class='container'>
		<h1>Welcome to a new Era</h1>
		<hr />
		<p>Unlimited boards; unlimited possibilities; unlimited conversation. Nothing lost in the black hole of social media. No identity to hold you back.</p>
	</div>
</div>

<div class='container'>
	<div class='card-deck'>
		<a href='board.php?id=gc'>
			<div class='card' style='width: 15em'>
				<div class='card-body'>
					<h5 class='card-title'>General Discussion</h5>
					<p class='card-text'>A place to chat about anything you want to. An open-ended, safe for work board.</p>
				</div>
			</div>
		</a>
		<a href='board.php?id=t'>
			<div class='card' style='width: 15em'>
				<div class='card-body'>
					<h5 class='card-title'>Tech Talk</h5>
					<p class='card-text'>A place for technical talk and discussing upcoming news.</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
