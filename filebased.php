<?php

$dir = "posts/";
$postfiles = array();

function list_zipfiles($mydirectory) {
	
	// directory we want to scan
	$dircontents = scandir($mydirectory);
	
	// list the contents
	echo '<ul>';
	foreach ($dircontents as $file) {
		$extension = pathinfo($file, PATHINFO_EXTENSION);
		if ($extension == 'txt') {
			echo "<li>$file </li>";
		}
	}
	echo '</ul>';
}

list_zipfiles($dir);




?>
