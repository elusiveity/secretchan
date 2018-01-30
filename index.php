<?php

// Essential Variables
$sitename = 'Nukeground';
$tagline = 'A place to test, a place to practice, a place to blow up your shit';
$dbu = 'root';
$dbp = '';
$dbh = 'localhost';
$db = 'imageboard';




// Functions ... kinda.

# Set page title
function setPageTitle($con)
{
	if (isset($_GET['board']))
	{
		$stmt = $con->prepare('SELECT * FROM boards WHERE id = :board LIMIT 1');
		$stmt->bindParam(':board', $_GET['board']);
		if ($stmt->execute())
		{
			$res = $stmt->fetch(PDO::FETCH_ASSOC);
			return = "/$res[id]/ - $res[name] - $sitename";
		} else {
			return = "$sitename - $tagline";
		}
	} else {
		return = "$sitename - $tagline";
	}
}

// Pull homepagey stuff. 
function getPosts($parent = 0, $con)
{
	$sql = 'SELECT * FROM posts WHERE parent=:parent';
	$prep = $con->prepare($sql);
	$prep->bindParam(':parent', $parent);
	$prep->execute();
	return $prep->fetch(PDO::FETCH_ASSOC);
}

function getBoards($con)
{
	$sql = 'SELECT * FROM boards';
	$prep = $con->prepare($sql);
	$prep->execute();
	return $prep->fetch(PDO::FETCH_ASSOC);
}

function getBoardDetails($b, $con)
{
	$prep = $con->prepare('SELECT * FROM boards WHERE id = :id');
	$prep->bindParam(':id', $b);
	if ($prep->execute())
	{
		return $prep->fetch(PDO::FETCH_ASSOC);
	} else {
		return 0;
	}
}

function testBoard($b, $con)
{
	$prep = $con->prepare('SELECT * FROM boards WHERE id = :id');
	$prep->bindParam(':id', $b);
	if ($prep->execute())
	{
		if ($prep->rowCount()>0)
		{
			return 1;
		} else {
			return 0;
		}
	} else {
		return 0;
	}
}

// SQL
$con = new PDO("mysql:dbname=$db;host=$dbh", $dbu, $dbp);

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;

if (isset($_GET['board']))
{
	if (isset(testBoard($_GET['board'], $con)))
	{
		$activeBoard = getBoardDetails($_GET['board'], $con);
	}
}

$smarty->assign("Title", setPageTitle($con));
$smarty->display($display);

?>
