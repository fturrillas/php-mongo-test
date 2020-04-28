<?php

echo "hola mundo2\n";
require 'MongoDB/autoload.php';

$cliente = new MongoDB\Client("mongodb://localhost:27017");

phpinfo();



?>
