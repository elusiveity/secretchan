<?php /* Smarty version 2.6.31, created on 2018-01-25 14:34:46
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'popup_init', 'header.tpl', 3, false),)), $this); ?>
<html>
<head>
<?php echo smarty_function_popup_init(array('src' => "/javascripts/overlib.js"), $this);?>

<title><?php echo $this->_tpl_vars['Title']; ?>
</title>
<link href='css/reset.css' type='text/css' rel='stylesheet' />
<link href='css/style.css' type='text/css' rel='stylesheet' />
</head>
<body>
<header>
	<nav>
	<?php $_from = 'boards'; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['board']):
?>
		[<a href='?board=<?php echo $this->_tpl_vars['board']; ?>
'><?php echo $this->_tpl_vars['board']; ?>
</a>]
	<?php endforeach; endif; unset($_from); ?>
	</nav>
	<h1><?php echo $this->_tpl_vars['Title']; ?>
</h1>
</header>
<form id='newpost'>
	<table>
		<tr>
			<td><label for='username'>Name:</label></td>
			<td><input type='text' id='username' name='username' placeholder='Blank for Anonymous' /></td>
		</tr>
		<tr>
			<td><label for='subject'>Subject</label></td>
			<td><input type='text' id='subject' name='subject' /></td>
		</tr>
		<tr>
			<td><label for='comment'>Comment:</label></td>
			<td><textarea id='comment' name='comment'></textarea></td>
		</tr>
		<tr>
			<td>Verification:</td>
			<td></td>
		</tr>
		<tr>
			<td><label for='attachment'>File:</label></td>
			<td><input type='file' id='attachment' name='attachment' />
		</tr>
	</table>
</form>