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

<br>

<h1>Dossier</h1>

<?php 

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';


