{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

	<div class='container-fluid'>
		<div class='card-deck'>
		{foreach $posts as $post}
			<div class='card' style='width: 15em'>
				<img src='/thumb/{$post.thumb}' class='card-img-top' style='max-height: 200px;' />
				<div class='card-body'>
					<h5 class='card-title'>{$post.subject}</h5>
					<p class='card-text'>{$post.message}</p>
				</div>
				<div class='card-footer'>
					<small class='text-muted'>Posted by {$post.nameblock}</small>
				</div>
			</div>
		{/foreach}
		</div>
	</div>

{include file="footer.tpl"}
