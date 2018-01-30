{config_load file=test.conf section="setup"}
{include file="header.tpl"}
<div class='post-message'>
	<h1>{$postMessageTitle}</h1>
	<p>{$postMessageDetails}</p>
</div>
{include file="footer.tpl"}
