<?php

require 'libs/Smarty.class.php';
$con = include('db.php');

function getPosts($parent = 0)
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
