<?php

// Essential Variables
$sitename = 'Nukeground';
$tagline = 'A place to test, a place to practice, a place to blow up your shit';
$dbu = 'root';
$dbp = '';
$dbh = 'localhost';
$db = 'imageboard';

// Fuck you I make my own variables bitch

if (isset($_GET['board']))
{
	$board = $_GET['board'];
	$title = "$board // $sitename";
} else {
	$title = "$sitename - $tagline";
}

// Functions ... kinda.

// Pull homepagey stuff. 
function getPosts($parent = 0, $con)
{
	$sql = 'SELECT * FROM posts WHERE parent=:parent';
	$prep = $con->prepare($sql);
	$prep->bindParam(':parent', $parent);
	$prep->execute();
	return $prep->fetchAll();
}

function getBoards($con)
{
	$sql = 'SELECT * FROM boards';
	$prep = $con->prepare($sql);
	$prep->execute();
	return $prep->fetchAll();
}


// SQL
$con = new PDO("mysql:dbname=$db;host=$dbh", $dbu, $dbp);

$homeposts = getPosts(0, $con);
foreach ($homeposts as $post)
{ $posts[] = $post; }

$boardz = getBoards($con);
foreach ($boardz as $board)
{ $boards[] = $board['id']; }

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->assign("Title", $title);
$smarty->assign("posts", $posts);
$smarty->assign("boards", $boards);

$smarty->display('homepage.tpl');

?>
