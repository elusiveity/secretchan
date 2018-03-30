<?php
/* Smarty version 3.1.30, created on 2018-03-30 04:20:28
  from "/home/nukeground/public_html/custom/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abdbb0c7cae63_82124243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8a2eea0c7633669d60b1d0ad40b8f83ab4650e' => 
    array (
      0 => '/home/nukeground/public_html/custom/templates/index.tpl',
      1 => 1522383627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5abdbb0c7cae63_82124243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boards']->value, 'board');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
?>
<a href='board.php?id=<?php echo $_smarty_tpl->tpl_vars['board']->value['id'];?>
'>
<div class="card <?php if ($_smarty_tpl->tpl_vars['board']->value['nfsw'] == 0) {?>border-primary<?php } else { ?>border-danger<?php }?> mb-3" style="max-width: 18rem;">
  <div class="card-body <?php if ($_smarty_tpl->tpl_vars['board']->value['nfsw'] == 0) {?>text-primary<?php } else { ?>text-danger<?php }?>">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['board']->value['id'];?>
</h5>
    <p class='card-text'><?php echo $_smarty_tpl->tpl_vars['board']->value['description'];?>

  </div>
</div>
</a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
