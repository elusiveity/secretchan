{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

	<div class='container-fluid imageview'>{foreach $posts as $post}<a href='thread.php?board={$board}&id={$post.id}'><img src='/thumb/{$post.thumb}' /></a>{/foreach}</div>

{include file="footer.tpl"}
