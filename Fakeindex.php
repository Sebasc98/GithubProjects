<?php
require_once "Includes/dbh.inc.php";
require 'header.php'; 
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>
<form action= "Includes/logout.inc.php" method="post">
<input type="submit" name="Uitloggen" id="test" value="Uitloggen" /><br/>
</form>

