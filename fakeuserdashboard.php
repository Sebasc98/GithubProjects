<?php
// Pagina om te testen of het werkt.
require 'header.php'; 
require 'Includes/gegevens.inc.php'; // script dat alle informatie over de user opslaat in sessie variabelen.
if(isset($_SESSION['UserID'])){
    echo 'Ingelogd';
}
else {
    header('Location: inlog.php');
    exit();
}
?>
<a href='AccountClient.php'> Client toevoegen </a>
<a href='fakedashboardclient.php?id=1'>Client</a>
<form action= "Includes/logout.inc.php" method="post">
<input type="submit" name="Uitloggen" id="test" value="Uitloggen" /><br/>
</form>

<br>

<h1> User information</h1>

<?php 

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';