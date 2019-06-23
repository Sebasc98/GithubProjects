<?php
// SCRIPT WERKT 99.9%
//Script voor de uitlogknop
if(isset($_POST['Uitloggen']))
{
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
    
}
else {
    // doorverwijzen naar pagina waar gebruiker vandaan kwam (geen idee hoe dat moet)
}
