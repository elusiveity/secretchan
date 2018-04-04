{include file="header.tpl" title=foo}

<div class='container'>
	<div class="alert alert-danger" role="alert" style='margin-top: 30px;'>
	  <h4 class="alert-heading">{$errorsubject}</h4>
		<hr />
	  <p>{$errormessage}</p>
	</div>
</div>

{include file="footer.tpl"}
