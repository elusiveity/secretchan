{config_load file=test.conf section="setup"}
{include file="header.tpl"}

<ul>
{foreach from=$boards item=board}
<li>{$board}</li>
{/foreach}
</ul>

{include file="footer.tpl"}
