<?php

require 'libs/Smarty.class.php';
$config = include 'config.php';
$dsn = "mysql:host=$config[dbhost];dbname=$config[dbname]";
$con = new PDO($dsn, $config['dbuser'], $config['dbpass']);


function getPostsAllBoards($parent)
{
	global $con;
	$sql = 'select * from b_posts where parent = :parent';
	$q = $con->prepare($sql);
	$q->bindParam(':parent', $parent);
	$q->execute();
	return $q->fetchAll();
}

function getPostsByBoard($board, $parent)
{
	global $con;
	$sql = 'select * from b_posts where parent = :parent AND board = :board';
	$q = $con->prepare($sql);
	$q->bindParam(':parent', $parent);
	$q->bindParam(':board', $board);
	$q->execute();
	return $q->fetchAll();
}

function getPostsByParent($parent)
{
	global $con;
	$sql = 'select * from b_posts where parent = :parent';
	$q = $con->prepare($sql);
	$q->bindParam(':parent', $parent);
	$q->execute();
	return $q->fetchAll();
}

function getBoards()
{
	global $con;
	$sql = 'select * from boards';
	$q = $con->prepare($sql);
	$q->execute();
	return $q->fetchAll();
}

function getSingularPost($id)
{
	global $con;
	$sql = 'select * from b_posts where id = :bid LIMIT 1';
	$q = $con->prepare($sql);
	$q->bindParam(':bid', $id);
	$q->execute();
	return $q->fetch();
}


function postThread()
{}

function processImage($image)
{
	
	return $result;
}

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
