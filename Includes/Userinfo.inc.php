<?php
// Script die alle informatie van de user uit de database haalt wanneer de user inlogt.
session_start();
$sql = "SELECT * FROM inlog 
INNER JOIN user ON inlog.Userid=user.Userid 
INNER JOIN adres ON adres.User_Userid=user.Userid
INNER JOIN bestand ON bestand.User_Userid=user.Userid
INNER JOIN ticket ON ticket.User_Userid=user.Userid
INNER JOIN [status] ON [status].User_Userid=user.Userid
INNER JOIN relationship ON relationship.User_Userid1=user.Userid
INNER JOIN organisation ON user.Organisation_Organisationid=organisation.Organisationid
;";

//WERKT
/*$sql = "SELECT * FROM inlog 
INNER JOIN user ON inlog.Userid=user.Userid;";*/

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
else 
{ 
    //placeholder invullen  
    mysqli_stmt_bind_param($stmt,'ss',$username, $username); // hangt van username variabele af 2x username want inloggen met mail of username
    mysqli_stmt_execute($stmt);  
    $result = mysqli_stmt_get_result($stmt);
    
    // username en wachtwoord controleren
    if ($row = mysqli_fetch_assoc($result))
    {
            // alle userinfo 
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Voornaam'] = $row['Firstname'];
            $_SESSION['Achernaam'] = $row['Lastname'];
            $_SESSION['Geboortedatum'] = $row['DateOfBirth'];
    }        
}    