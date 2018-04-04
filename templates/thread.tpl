{include file="header.tpl" title=foo}
{include file="postblock.tpl"}

<div class='jumbotron'>
	<img src='/thumbs/{$post.thumb}' />
	<h1>{$post.subject}</h1>
	<p>{$post.message}</h1>
</div>

{foreach $posts as $post}
<div class='thread-reply'>
	<img src='/thumbs/{$post.thumb}' />
	<h1>{$post.subject}</h1>
	<p>{$post.message}</h1>
</div>
{/foreach}

{include file="footer.tpl"}
