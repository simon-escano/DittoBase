<?php

$hostname = 'dbdittobase.ctckaoqkklx3.ap-southeast-2.rds.amazonaws.com';
$username = 'moltsimon';
$password = 'MoltSimon12345';
$database = 'dbDittobase'; // Replace 'your_database_name' with your actual database name

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}