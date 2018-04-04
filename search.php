<?php
	include('functions.php');

	if (isset($_POST['searchtype']))
	{

	} else {
		$smarty->assign('errorsubject', 'Search malformed');
		$smarty->assign('errormessage', 'Looks like there was an error submitting your search. Please go back and try again. If this becomes a repeated problem, then we\'ve probably fucked something up.');
		$smarty->display('error.tpl');
	}

?>
