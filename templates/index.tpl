{include file="header.tpl" title=foo}

<div class='jumbotron'>
	<div class='container'>
		<h1>Welcome to a new Era</h1>
		<hr />
		<p>Unlimited boards; unlimited possibilities; unlimited conversation. Nothing lost in the black hole of social media. No identity to hold you back.</p>
	</div>
</div>

<div class='container'>
	<div class='card-deck'>
		<a href='board.php?id=gc'>
			<div class='card' style='width: 15em'>
				<div class='card-body'>
					<h5 class='card-title'>General Discussion</h5>
					<p class='card-text'>A place to chat about anything you want to. An open-ended, safe for work board.</p>
				</div>
			</div>
		</a>
		<a href='board.php?id=t'>
			<div class='card' style='width: 15em'>
				<div class='card-body'>
					<h5 class='card-title'>Tech Talk</h5>
					<p class='card-text'>A place for technical talk and discussing upcoming news.</p>
				</div>
			</div>
		</a>
	</div>
</div>

{include file="footer.tpl"}
