<?php
/* Smarty version 3.1.30-dev/52, created on 2016-03-14 00:16:51
  from "/var/www/thevault/board/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/52',
  'unifunc' => 'content_56e602f3452334_13120765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2eed79b02ad9a0fc9236ef8cfd4a32e1a27b41f' => 
    array (
      0 => '/var/www/thevault/board/templates/login.tpl',
      1 => 1457913322,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56e602f3452334_13120765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id='loginform' action='post' method='login.php'>
	<i class="fa fa-cog circle outercircle"></i>
	<i class="fa fa-cog circle outercircle fifteendeg"></i>
	<i class="fa fa-cog circle innercircle"></i>
	<i class="fa fa-cog circle innercircle fifteendeg"></i>
	<fieldset form='login'>
		<legend>Login</legend>
		<label for='email'>Email: </label> <input type='text' id='email' name='email' placeholder='gary@vault108.org' />
		<label for='password'>Password: </label> <input type='password' id='password' name='password' placeholder='vault108' />
	</fieldset>
</form>
<?php }
}
