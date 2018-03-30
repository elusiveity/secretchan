{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

		{foreach $posts as $post}
		<div class='post'>
			<a href='/src/{$post.file}'><img src='/thumb/{$post.thumb}' /></a>
			<div class='text'>
			{$post.message}
			</div>
		</div>
		{/foreach}

{include file="footer.tpl"}
