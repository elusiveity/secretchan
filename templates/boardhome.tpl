{include file="header.tpl" title=foo}
{include file="postblock-floating.tpl" title=foo}

	<div class='container-fluid'>
		<div class='card-deck'>
		{foreach $posts as $post}
			<a href='thread.php?id={$post.id}'>
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
			</a>
		{/foreach}
		</div>
	</div>

{include file="footer.tpl"}
