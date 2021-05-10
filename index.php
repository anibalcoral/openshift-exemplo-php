<?php
header('Content-type: text/plain');
echo "\n\nHostName do servidor: " . gethostname(); 
echo "\n\Client HTTP: " . $_SERVER['HTTP_USER_AGENT'];
echo "\n\nVersão do PHP: " . phpversion();
echo "\n\n\nFuncionou :-) !!!!";
echo "\n\nAnibal Coral";

?>
