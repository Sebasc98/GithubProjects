<?php

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