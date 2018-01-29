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
