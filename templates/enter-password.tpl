{config_load file=test.conf section="setup"}
{include file="header.tpl"}

<form id='enterpassword' method='post' action='new.php'>
	<input type='password' id='password' name='password' /><br />
	<select id='board' name='board'>
		<option value='b'>/b/random</option>
	</select><br />
	<input type='submit' id='submit' name='submit' value='submit' />
</form>

{include file="footer.tpl"}