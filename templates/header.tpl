<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
	<link rel='stylesheet' href='css/custom.css' type='text/css' />

    <title>{$title}{if isset($board)} - {$board}{/if}</title>
  </head>
  <body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
<div class='container'>
  <a class="navbar-brand" href="/">{$title}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="navbar-nav mr-auto mt-2 mt-lg-0">
    </div>
	  <form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
					<select id='searchtype' class='input-group-text'>
						<option value='board'>B</option>
						<option value='post'>P</option>
					</select>
	        <!-- span class="input-group-text" id="basic-addon1">@</span -->
	      </div>
	      <input type="text" class="form-control" id='search' name='search' aria-label="search" aria-describedby="basic-addon1">
				<div class="input-group-append">
				    <button class="input-group-text btn btn-outline" type="submit">
							>
						</button>
				</div>
			</div>
	  </form>
  </div>
</div>
</nav>
