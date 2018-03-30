<?php
/* Smarty version 3.1.30, created on 2018-03-30 04:00:43
  from "/home/nukeground/public_html/custom/templates/images.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abdb66b29eac4_84249343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5bbb55fa9793167a9980dac93ed81f30d5765dc' => 
    array (
      0 => '/home/nukeground/public_html/custom/templates/images.tpl',
      1 => 1522382441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abdb66b29eac4_84249343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


	<div class='container-fluid imageview'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?><a href='thread.php?board=<?php echo $_smarty_tpl->tpl_vars['board']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'><img src='/thumb/<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb'];?>
' /></a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
