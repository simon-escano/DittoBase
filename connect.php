<?php
$db = new mysqli('127.0.0.1', 'root', '', 'dbescano');

if ($db->connect_errno) {
    die('Sorry, DittoBase is not available at this time.');
}