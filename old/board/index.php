<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Name", "/board", true);
$smarty->assign("SFW", "nsfw", true);

function random_banner($dir)
{
	$files = glob($dir.'/*.gif');
	$file = array_rand($files);
	return $files[$file];
}

$smarty->assign("bannerurl", random_banner("banners"));

$smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
                               array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option_selected", "NE");

if (isset($_GET['tpl']))
{
	$smarty->display($_GET['tpl']);
}
else 
{
	$smarty->display('board.tpl');
}