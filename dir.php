<?php

function foreachDir($path) {
	$separator = DIRECTORY_SEPARATOR;
	$path = $path . $separator;

	if (!is_dir($path)) {return false;}

	foreach(scandir($path) as $file) {
		if ($file == "." || $file == "..") {continue;}

		if (is_dir($path . $file)) {
			foreachDir($path . $file);
		} else {
			echo '<pre>';
			echo $path . $file . "\n";
		}
	}
}

foreachDir(__DIR__);