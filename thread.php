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
	$op = getSingularPost($_GET['id']);
	if ( $op )
	{
		$smarty->assign('op', $op);
		$smarty->assign('posts', getPostsByParent($_GET['id']));
	} else {
		$error = 1;
        	$errorsubject = "Cunts fucked";
        	$errormessage = "I haven't coded this error catching properly but I think you're seeing this because the thread doesn't exist. BL.";
	}
} else {
	$error = 1;
	$errorsubject = "No ID specified";
	$errormessage = "You need to specify which thread you want to view you fucking idiot.";
}

if ($error > 0)
{
	$smarty->assign('errorsubject', $errorsubject);
	$smarty->assign('errormessage', $errormessage);
	$smarty->display('error.tpl');
} else {
	$smarty->display('thread.tpl');
}

?>
