<?php
// Script die alle informatie van de client uit de db haalt, dus persoonlijke gegevens, bestanden tickets....
require 'dbh.inc.php';
$sql = "SELECT * FROM user LEFT JOIN adres ON user.Userid= adres.User_Userid
WHERE Userid=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
else 
{ 
    //placeholder invullen  
    mysqli_stmt_bind_param($stmt,'i',$_SESSION['ClientID']); // nog veranderen in client id
    mysqli_stmt_execute($stmt);  
    $result = mysqli_stmt_get_result($stmt);
    
    // username en wachtwoord controleren
    if ($row = mysqli_fetch_assoc($result))
    {
            // alle userinfo 
            $_SESSION['Client_Voornaam'] = $row['Firstname'];
            $_SESSION['Client_Initialen'] = $row['Initialen'];
            if ($row['Tussenvoegsel'] == NULL)
            {
                $_SESSION['Client_Tussenvoegsel'] = '';
            }
            else 
            {
                $_SESSION['Client_Tussenvoegsel'] = $row['Tussenvoegsel'];
            } 
            $_SESSION['Client_Achternaam'] = $row['Lastname'];
            $_SESSION['Client_Geboortedatum'] = $row['DateOfBirth'];
            $_SESSION['Client_Nationaliteit'] = $row['Nationaliteit'];
            $_SESSION['Client_Burgerlijkestaat'] = $row['BurgerlijkeStaat'];
            $_SESSION['Client_telefoonnummer'] = $row['phone'];
            if ($row['Captive'] == 0)
            {
                $_SESSION['Client_Captive'] = 'false';
            }
            else 
            {
                $_SESSION['Client_Captive'] = 'true';
            } 
            $_SESSION['Client_instelling'] = $row['Captive'];
            $_SESSION['Woonplaats'] = $row['CITY'];
            $_SESSION['Huisnummer'] = $row['Housenumber'];
            $_SESSION['Client_straat'] = $row['Street'];
            $_SESSION['Postcode']= $row['Zipcode'];

            /* QUERY WERKT NIET
            $sql = "SELECT User_Userid2 FROM relationship  WHERE User_Userid1=? AND RelationType = Coach;";
            $stmt=mysqli_stmt_init($conn); 
            
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                echo 'SQL statement failed.';
            }
            
            else 
            {   
                mysqli_stmt_bind_param($stmt,'i',$_SESSION['ClientID']); 
                mysqli_stmt_execute($stmt);  
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result))
                {
                $coachid = $row['User_Userid2'];
                }
                $sql ='SELECT Firstname FROM user WHERE Userid = ?;';
                $stmt=mysqli_stmt_init($conn); 
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo 'SQL statement failed.';
                }
                else
                {
                    mysqli_stmt_bind_param($stmt,'i',$coachid); // 
                    mysqli_stmt_execute($stmt);  
                    $result = mysqli_stmt_get_result($stmt);
                    // username en wachtwoord controleren
                    if ($row = mysqli_fetch_assoc($result))
                    {
                    $_SESSION['Client_Coach'] = $row['Firstname'];
                    }
                }
                
            }*/
            
            // code voor bestanden tonen

            // code voor script tonen
            
            
    }        
}    