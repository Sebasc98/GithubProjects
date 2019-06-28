<?php
// Pagina om te testen of het werkt.
require 'header.php'; 
if(isset($_GET['id'])) 
{
    $_SESSION['ClientID'] = $_GET['id'];
}

require 'Includes/Userinfo.inc.php'; // script dat alle informatie over de user opslaat in sessie variabelen.
require 'Includes/statusupdate.inc.php';
if(isset($_SESSION['ClientID'])){
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


