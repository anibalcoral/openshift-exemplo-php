<?php
header('Content-type: text/plain');
echo "\n\nHostName: " . gethostname(); 
echo "\n\nServidor HTTP: " . $_SERVER['HTTP_USER_AGENT'];
echo "\n\nUname: " . php_uname('n');
echo "\n\nBrowser:" . $_SERVER['HTTP_USER_AGENT'] . "\n\n";
echo "\n\n\nFuncionou !!!!";
echo "\n\nAnibal Coral";

?>
