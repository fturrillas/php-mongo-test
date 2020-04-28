<?php

echo "hola mundo\n";

$mongo_server=getenv( "MONGODB_SERVER" );
$mongo_user=getenv( "MONGODB_USER" );
$mongo_password= getenv("MONGODB_PASSWORD");
$mongo_database=getenv("MONGODB_DATABASE" );

echo "server   =  $mongo_server\n";
echo "user     =  $mongo_user\n";
echo "password = $mongo_password\n";
echo "database = $mongo_database\n";


require 'MongoDB/autoload.php';


$cliente = new MongoDB\Client("mongodb://localhost:27017");

phpinfo();



?>
