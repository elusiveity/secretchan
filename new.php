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
	$con = new pdo( 'mysql:host=$dbh;dbname=$db',$dbu,$dbp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}

## Useful functions for things

# For if we go username/password, if we want to sell premium access or some shit
function testLogin($u, $p, $con)
{
	return 0;
}

# Password access into the board.
function testPassword($p, $con)
{
	$hp = hash('sha256', $p);
	$sql = "SELECT expiry FROM board_passwords LIMIT 1 WHERE password = ::password";
	$prep = $con->prepare($sql);
	$prep->bindParam('::password', $hp);
	$prep->execute();
	# Format: 2018-01-29 01:51:19
	$expiry = $prep->fetch(PDO::FETCH_ASSOC);
	if ( ! $expiry )
	{
		return 0;
	} else {
		return 1;
	}
}

function getBoards($con, $)

# Display page
if (isset($display))
{
	$smarty->display($display);
} else {
	$smarty->display('fuck.tpl');
}

?>
