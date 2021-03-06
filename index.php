<?php

$mongo_server=getenv( "MONGODB_SERVER" );
$mongo_user=getenv( "MONGODB_USER" );
$mongo_password= getenv("MONGODB_PASSWORD");
$mongo_database=getenv("MONGODB_DATABASE" );
$mongo_port=getenv("MONGODB_PORT" );

echo "server   =  $mongo_server\n";
echo "user     =  $mongo_user\n";
echo "password = $mongo_password\n";
echo "database = $mongo_database\n";
echo "port = $mongo_port\n";


require 'MongoDB/autoload.php';


use MongoDB\Client as Mongo;

/* $mongo_url="mongodb://${mongo_server}:${mongo_port}/${mongo_database}"; */

$mongo_url="mongodb://${mongo_user}:${mongo_password}@${mongo_server}:${mongo_port}/${mongo_database}"; 

echo "URL = $mongo_url\n";

$client = new MongoDB\Client($mongo_url);

$collection = $client->selectCollection($mongo_database,"tmp");

echo "cantidad de registros = ". $collection->count(). "\n";



?>
