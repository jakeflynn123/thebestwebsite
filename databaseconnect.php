<?php
$servername = "141.0.165.182";
$username = "bestuser";
$password = "Ohr5o2_3";
$databasename = "bestdatabase";

// Create connection
$db = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Change over to PDO from mysqli
// $DBH = new PDO("mysql:host=$servername;dbname=$databasename", $user, $pass);
