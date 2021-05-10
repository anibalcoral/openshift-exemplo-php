<?php
header('Content-type: text/plain');
echo "Anibal Coral";
echo "\nHostName: " . gethostname(); 
echo "\nServidor HTTP: " . $_SERVER['HTTP_USER_AGENT'];
echo "\nPHP Info:\n";
phpinfo(); 
?>
