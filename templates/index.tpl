{include file="header.tpl" title=foo}
{include file='postblock.tpl'}

{foreach $boards as $board}
<a href='board.php?id={$board.id}'>
<div class="card {if $board.nfsw eq 0}border-primary{else}border-danger{/if} mb-3" style="max-width: 18rem;">
  <div class="card-body {if $board.nfsw eq 0}text-primary{else}text-danger{/if}">
    <h5 class="card-title">{$board.id}</h5>
    <p class='card-text'>{$board.description}
  </div>
</div>
</a>
{/foreach}

{include file="footer.tpl"}
