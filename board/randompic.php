<?php

function random_banner($dir)
{
	$files = glob($dir.'/*.gif');
	$file = array_rand($files);
	return $files[$file];
}

echo "<img src='".random_banner("banners")."' />";

?>
