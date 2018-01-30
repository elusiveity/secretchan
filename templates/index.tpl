{config_load file=test.conf section="setup"}
{include file="header.tpl"}
{include file="postbox.tpl"}

{foreach from=$posts item=post}
	<hr />
	<div class='homepage-post'>
		<img src='img/{$post.attachment}' alt='{$post.id}{$post.username}' />
		<p>
			<span class='title'>{if $post.title}{$post.title} by {/if}{$post.username}@{$post.timestamp} No. {$post.id}</span><br />
			{$post.post}
		</p>
	</div>
{/foreach}

{include file="footer.tpl"}
