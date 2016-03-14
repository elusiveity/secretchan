<?php
/* Smarty version 3.1.30-dev/52, created on 2016-03-14 00:16:12
  from "/var/www/thevault/board/templates/post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/52',
  'unifunc' => 'content_56e602cc813850_39299991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc37d192a5e73d4f7aaff29619a87455783d41d' => 
    array (
      0 => '/var/www/thevault/board/templates/post.tpl',
      1 => 1457914571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e602cc813850_39299991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '125765268056e602cc80f291_88051040';
?>
<form method='post' id='postbox'>
	<input type='text' id='name' name='name' placeholder='Gary' /><br />
	<input type='text' id='subject' name='subject' placeholder='Subject' /><br />
	<textarea maxlength='2000'></textarea><br />
	<input type='file' id='file' name='file' /><br />
	<input type='submit' name='submit' id='submit' value='Submit' />
</form>
<?php }
}
