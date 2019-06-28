<?php
// SCRIPT WERKT 99.9%
//Script voor de uitlogknop{
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
    

