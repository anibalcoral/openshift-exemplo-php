<?php
header('Content-type: text/plain');
echo "\n\nHostName: " . gethostname(); 
echo "\n\nServidor HTTP: " . $_SERVER['HTTP_USER_AGENT'];
echo "\n\nVersão Atual do PHP: " . phpversion();
echo "\n\n\nFuncionou !!!!";
echo "\n\nAnibal Coral";

?>
