<?php
/* Smarty version 3.1.30-dev/52, created on 2016-03-14 00:17:13
  from "/var/www/thevault/board/templates/board.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/52',
  'unifunc' => 'content_56e603093aa397_77801371',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7adefdb8dde7e5035588ff23295bedd9ca262389' => 
    array (
      0 => '/var/www/thevault/board/templates/board.tpl',
      1 => 1457914629,
      2 => 'file',
    ),
    '15d37815191ae3f5788403dd708108fa36a0eeec' => 
    array (
      0 => '/var/www/thevault/board/templates/header.tpl',
      1 => 1457431072,
      2 => 'file',
    ),
    '1bc37d192a5e73d4f7aaff29619a87455783d41d' => 
    array (
      0 => '/var/www/thevault/board/templates/post.tpl',
      1 => 1457914571,
      2 => 'file',
    ),
    'e2eed79b02ad9a0fc9236ef8cfd4a32e1a27b41f' => 
    array (
      0 => '/var/www/thevault/board/templates/login.tpl',
      1 => 1457913322,
      2 => 'file',
    ),
    'e8ac03b1937e92fe5cfffd5de63d496719095b55' => 
    array (
      0 => '/var/www/thevault/board/templates/footer.tpl',
      1 => 1457411553,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56e603093aa397_77801371 (Smarty_Internal_Template $_smarty_tpl) {
?>

<HTML>
<HEAD>
<TITLE>Vault 108 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
<link href='../stylesheet/reset.css' type='text/css' rel='stylesheet' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='../stylesheet/style.css' type='text/css' rel='stylesheet' />
<link href='../stylesheet/<?php echo $_smarty_tpl->tpl_vars['SFW']->value;?>
.css' type='text/css' rel='stylesheet' />
</HEAD>
<BODY>
<nav>
	<ul>
		<li>
			<a href='#' id='menutoggle'><i class='fa fa-bars'></i></a>
		</li>
		<li>
			<a href='/board'>/board</a>
		</li>
		<li>
			<a href='/board'>/board</a>
		</li>
		<li>
			<a href='/board'>/board</a>
		</li>
		<li>
			<a href='/board'>/board</a>
		</li>
		<li>
			<a href='/board'>/board</a>
		</li>
	</ul>
</nav>

<header>
	<img src='banners/4chan2.gif' alt='BRUCE BANNER' />
	<h1>Vault 108</h1>
</header>

<form method='post' id='postbox'>
	<input type='text' id='name' name='name' placeholder='Gary' /><br />
	<input type='text' id='subject' name='subject' placeholder='Subject' /><br />
	<textarea maxlength='2000'></textarea><br />
	<input type='file' id='file' name='file' /><br />
	<input type='submit' name='submit' id='submit' value='Submit' />
</form>

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

<section id='boardhome'>
	<article>
		<header>
			<img src='http://i.4cdn.org/biz/1443114696009.png' />
			<h1>Asasdasdasda asdasd asdas da sd asd a sad</h1>
		</header>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<section class='replies'>
			<article>
				<header>
					<img src='http://i.4cdn.org/biz/1443114696009.png' />
					<h2>Asasdasdasda asdasd asdas da sd asd a sad</h2>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
			<br />
			<article>
				<header>
					<img src='http://i.4cdn.org/biz/1443114696009.png' />
					<h2>Asasdasdasda asdasd asdas da sd asd a sad</h2>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
			<br />
			<article>
				<header>
					<img src='http://i.4cdn.org/biz/1443114696009.png' />
					<h2>Asasdasdasda asdasd asdas da sd asd a sad</h2>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
		</section>
	</article>
</section>
</BODY>
</HTML>

<?php }
}
