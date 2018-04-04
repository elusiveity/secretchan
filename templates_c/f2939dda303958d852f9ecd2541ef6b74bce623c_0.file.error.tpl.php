<?php
/* Smarty version 3.1.30, created on 2018-03-31 02:21:27
  from "/home/nukeground/public_html/templates/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abef0a7efe265_23934870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2939dda303958d852f9ecd2541ef6b74bce623c' => 
    array (
      0 => '/home/nukeground/public_html/templates/error.tpl',
      1 => 1522462885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abef0a7efe265_23934870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<div class='container'>
	<div class="alert alert-danger" role="alert" style='margin-top: 30px;'>
	  <h4 class="alert-heading"><?php echo $_smarty_tpl->tpl_vars['errorsubject']->value;?>
</h4>
		<hr />
	  <p><?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>
</p>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
