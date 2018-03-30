<?php
/* Smarty version 3.1.30, created on 2018-03-30 03:54:07
  from "/home/nukeground/public_html/custom/templates/boardhome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abdb4df7a1e82_46962945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20374a45dffc357f7e9ba14265935d82bc359b3f' => 
    array (
      0 => '/home/nukeground/public_html/custom/templates/boardhome.tpl',
      1 => 1522382045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abdb4df7a1e82_46962945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


	<div class='container-fluid'>
		<div class='card-deck'>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<div class='card' style='width: 15em'>
				<img src='/thumb/<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb'];?>
' class='card-img-top' style='max-height: 200px;' />
				<div class='card-body'>
					<h5 class='card-title'><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h5>
					<p class='card-text'><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</p>
				</div>
				<div class='card-footer'>
					<small class='text-muted'>Posted by <?php echo $_smarty_tpl->tpl_vars['post']->value['nameblock'];?>
</small>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
