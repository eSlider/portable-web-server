<?php

// Realpath 
$nginxConfigSource = "nginx/conf/nginx.conf";
$realpath = str_replace('\\','/',realpath(getcwd()."../../html"));
file_put_contents(
	$nginxConfigSource,
	preg_replace(
		"/SCRIPT_FILENAME.+?fastcgi_script_name/s",
		"SCRIPT_FILENAME $realpath/\$fastcgi_script_name",
		file_get_contents($nginxConfigSource)
	)
);
?>