<?php
// Pagina om te testen of het werkt.
require 'header.php'; 
if(isset($_SESSION['UserID'])){
    echo 'Ingelogd';
}
else {
    header('Location: inlog.php');
    exit();
}
?>

<form action= "Includes/logout.inc.php" method="post">
<input type="submit" name="Uitloggen" id="test" value="Uitloggen" /><br/>
</form>

<br>

<h1> User information</h1>

<?php 

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';


