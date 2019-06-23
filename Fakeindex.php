<?php
require_once "Includes/dbh.inc.php";
require 'header.php'; 
if(isset($_SESSION['UserID'])){
    echo 'Ingelogd';
}
// <form action= "Includes/logout.inc.php" method="post"></html> 
////<input type="submit" name="test" id="test" value="Uitloggen" /><br/>
//</form>;
else {
    echo 'Niet ingelogd';
}
?>
<form action= "Includes/logout.inc.php" method="post">
    <input type="submit" name="test" id="test" value="Uitloggen" /><br/>
</form>