<?php

## Essential Variables
$sitename = 'Nukeground';
$tagline = 'A place to test, a place to practice, a place to blow up your shit';
$dbu = 'root';
$dbp = '';
$dbh = 'localhost';
$db = 'imageboard';

## Start Smarty
require 'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;

## Connect to database
try
{
	$con = new pdo("mysql:host=$dbh;dbname=$db", $dbu, $dbp);
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}

## Useful functions for things

# Password access into the board.
function testPassword($p, $b, $con)
{
	# hash pw	
	$hp = hash('sha256', $p);
	$sql = "SELECT expiry FROM board_passwords WHERE password = :password and boardid = :board";
	$prep = $con->prepare($sql);
	$prep->bindParam(':password', $hp);
	$prep->bindParam(':board', $b);
	$prep->execute();
	$expiry = $prep->fetch(PDO::FETCH_ASSOC);
	if ($prep->rowCount() > 1)
	{
		die('we had an error');
	} else {
		if (strtotime($expiry['expiry']) > strtotime('now'))
		{ return 1; } else { return 0; }
	}
}


# Start using the functions and building the page.

if (isset($_POST['password']) && isset($_POST['board']))
{
	if (isset($_SESSION['lol']))
	{
		echo 2;
	} else {
		if (testPassword($_POST['password'], $_POST['board'], $con))
		{
			echo 1;
			$smarty->assign('postMessageTitle', 'Logged in yo');
			$smarty->assign('postMessageDetails', 'You have been given access to our shit. Good luck. If you fuck up I\'ll kick your ass to the curb.');
			$display = 'post-message.tpl';
		} else {
			$smarty->assign('postMessageTitle', 'Womp womp.');
			$smarty->assign('postMessageDetails', 'Your password was wrong. Suck shit asshole.');
			$display = 'post-message.tpl';
		}
	}
}

# Display page
if (isset($display))
{
	$smarty->display($display);
} else {
	$smarty->display('fuck.tpl');
}

?>
