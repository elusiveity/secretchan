<?php
/* Smarty version 3.1.30, created on 2018-04-03 00:09:36
  from "/home/nukeground/public_html/templates/boardhome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac2c6400af517_34642553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e52aa27942e361790a1337af69ca5270824289' => 
    array (
      0 => '/home/nukeground/public_html/templates/boardhome.tpl',
      1 => 1522714174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:postblock.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ac2c6400af517_34642553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:postblock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


	<div class='container-fluid'>
		<div class='card-deck'>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<a href='thread.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'>
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
			</a>
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
