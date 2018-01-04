<?php

$ip = $_SERVER['REMOTE_ADDR'];
$pip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$browser = json_encode(get_browser(null, true));

file_put_contents('foo.txt', "ip: " . $ip . "pip: " . $pip . "browser: " . $browser , FILE_APPEND );
?>

