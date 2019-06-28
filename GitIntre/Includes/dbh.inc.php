<?php
// SCRIPT WERKT 100%
// De script is nodig om verbinding te maken met de database. 

$servername ="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName="project";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>