<?php
/* Smarty version 3.1.30, created on 2018-03-30 04:06:06
  from "/home/nukeground/public_html/custom/templates/thread.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abdb7ae1849f6_26805762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f9e3d28efeb1ec83f33a4a59c0ee87a21c00f0' => 
    array (
      0 => '/home/nukeground/public_html/custom/templates/thread.tpl',
      1 => 1522382748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abdb7ae1849f6_26805762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
		<div class='post'>
			<a href='/src/<?php echo $_smarty_tpl->tpl_vars['post']->value['file'];?>
'><img src='/thumb/<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb'];?>
' /></a>
			<div class='text'>
			<?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>

			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
