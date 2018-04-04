<?php
/* Smarty version 3.1.30, created on 2018-04-04 07:42:30
  from "/home/nukeground/public_html/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac481e6ddc1e0_48144407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5233d529728285f9b17ad5a82d12d272e47a5126' => 
    array (
      0 => '/home/nukeground/public_html/templates/header.tpl',
      1 => 1522827749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac481e6ddc1e0_48144407 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Custom CSS -->
	<link rel='stylesheet' href='css/custom.css' type='text/css' />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;
if (isset($_smarty_tpl->tpl_vars['board']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['board']->value;
}?></title>
  </head>
  <body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
<div class='container'>
  <a class="navbar-brand" href="/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="navbar-nav mr-auto mt-2 mt-lg-0">
    </div>
	  <form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
					<select id='searchtype' class='input-group-text'>
						<option value='board'>B</option>
						<option value='post'>P</option>
					</select>
	        <!-- span class="input-group-text" id="basic-addon1">@</span -->
	      </div>
	      <input type="text" class="form-control" id='search' name='search' aria-label="search" aria-describedby="basic-addon1">
				<div class="input-group-append">
				    <button class="input-group-text btn btn-outline" type="submit">
							>
						</button>
				</div>
			</div>
	  </form>
  </div>
</div>
</nav>
<?php }
}
