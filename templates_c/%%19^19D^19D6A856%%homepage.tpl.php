<?php /* Smarty version 2.6.31, created on 2018-01-25 15:05:57
         compiled from homepage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'homepage.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "test.conf",'section' => 'setup'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
	<hr />
	<div class='homepage-post'>
		<img src='img/<?php echo $this->_tpl_vars['post']['attachment']; ?>
' alt='<?php echo $this->_tpl_vars['post']['id']; ?>
<?php echo $this->_tpl_vars['post']['username']; ?>
' />
		<p>
			<span class='title'><?php if ($this->_tpl_vars['post']['title']): ?><?php echo $this->_tpl_vars['post']['title']; ?>
 by <?php endif; ?><?php echo $this->_tpl_vars['post']['username']; ?>
@<?php echo $this->_tpl_vars['post']['timestamp']; ?>
 No. <?php echo $this->_tpl_vars['post']['id']; ?>
</span><br />
			<?php echo $this->_tpl_vars['post']['post']; ?>

		</p>
	</div>
<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>