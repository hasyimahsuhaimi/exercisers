<?php

$dbHost = 'localhost';
$dbName = 'recommender_db';
$dbUser = 'root';
$dbPass = '';

$db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>