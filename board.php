<?php
/**
 * Example Application
 *
 * @package Example-application
 */

include('functions.php');
$error = 0;

if (isset($_GET['id']))
{
	$sql = "select * from boards where id = :bid";
	$sql = $con->prepare($sql);
	$sql->bindParam(':bid', $_GET['id']);
	$sql->execute();
	if ($sql->rowCount() > 0)
	{
		$sql = "SELECT * FROM b_posts WHERE bid = :bid AND parent = 0";
		$sql = $con->prepare($sql);
		$sql->bindParam(":bid", $_GET['id']);
		$sql->execute();
		$smarty->assign("posts", $sql->fetchAll());
	} else {
		$error = 1;
		$errorsubject = "Board ID doesn't exist";
		$errormessage = "Stop trying to hack the system. You're not morpheus.";
	}
}

if ($error > 0)
{
	$smarty->assign('errorsubject', $errorsubject);
	$smarty->assign('errormessage', $errormessage);
	$smarty->display('error.tpl');
} else {
	$smarty->display('boardhome.tpl');
}

?>
