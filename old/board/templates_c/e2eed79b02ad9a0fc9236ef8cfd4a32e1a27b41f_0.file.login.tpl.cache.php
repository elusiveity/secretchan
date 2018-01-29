<?php
/* Smarty version 3.1.30-dev/52, created on 2016-03-13 23:55:23
  from "/var/www/thevault/board/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/52',
  'unifunc' => 'content_56e5fdebbf83c6_72270726',
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
  'includes' => 
  array (
  ),
),false)) {
function content_56e5fdebbf83c6_72270726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '154739082056e5fdebbf0417_50125264';
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
