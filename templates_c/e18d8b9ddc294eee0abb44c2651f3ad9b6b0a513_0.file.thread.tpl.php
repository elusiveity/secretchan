<?php
/* Smarty version 3.1.30, created on 2018-04-04 04:16:10
  from "/home/nukeground/public_html/templates/thread.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac4518aa98175_17741775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18d8b9ddc294eee0abb44c2651f3ad9b6b0a513' => 
    array (
      0 => '/home/nukeground/public_html/templates/thread.tpl',
      1 => 1522815368,
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
function content_5ac4518aa98175_17741775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:postblock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class='jumbotron'>
	<img src='/thumbs/<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb'];?>
' />
	<h1><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</h1>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
<div class='thread-reply'>
	<img src='/thumbs/<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb'];?>
' />
	<h1><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</h1>
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
