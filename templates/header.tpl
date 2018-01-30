<html>
<head>
{popup_init src="/javascripts/overlib.js"}
<title>{$Title}</title>
<link href='css/reset.css' type='text/css' rel='stylesheet' />
<link href='css/style.css' type='text/css' rel='stylesheet' />
</head>
<body>
<header>
	<nav>
	{foreach from=boards item=board}
		[<a href='?board={$board}'>{$board}</a>]
	{/foreach}
	</nav>
	<h1>{$Title}</h1>
</header>