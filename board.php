<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'libs/Smarty.class.php';
$con = include('db.php');

function getPosts($parent, $board)
{
	global $con;
	$sql = 'select * from b_posts where parent = :parent and board = :board';
	$q = $con->prepare($sql);
	$q->bindParam(':parent', $parent);
	$q->bindParam(':board', $board);
	$q->execute();
	return $q->fetchAll();
}

$posts = getPosts(0, 'b');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign('board', 'b');
$smarty->assign("posts", $posts);

$smarty->display('boardhome.tpl');
