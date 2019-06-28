<?php // script voor persoonsgegevens van alle gebruiker behalve de client bedoelt voor de pagina na de login.

require 'dbh.inc.php';
$sql = "SELECT * FROM organisation LEFT JOIN user ON organisation.Organisationid=user.Organisation_Organisationid
WHERE Userid=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
else 
{ 
    //placeholder invullen  
    mysqli_stmt_bind_param($stmt,'i',$_SESSION['UserID']); // hangt van username variabele af 2x username want inloggen met mail of username
    mysqli_stmt_execute($stmt);  
    $result = mysqli_stmt_get_result($stmt);
    
    // username en wachtwoord controleren
    if ($row = mysqli_fetch_assoc($result))
    {
            // alle Client info 
            $_SESSION['Voornaam'] = $row['Firstname'];
            
            if ($row['Tussenvoegsel'] == NULL)
            {
                $_SESSION['Tussenvoegsel'] = '';
            }
            else 
            {
                $_SESSION['Tussenvoegsel'] = $row['Tussenvoegsel'];
            } 
            $_SESSION['Achternaam'] = $row['Lastname'];
            $_SESSION['Werkzaambij'] = $row['Organisationname'];
            $_SESSION['Functie'] = $row['Access'];
            $_SESSION['Telefoonnummer'] = $row['phone'];
            $_SESSION['Mailadres'] = $row['Email'];
            $_SESSION['Bericht'] = $row['Notitie'];
           
            
    }        
}
// OVERZICHT VAN CLIENTEN WERKT
$sql = "SELECT User_Userid2, Firstname FROM relationship LEFT JOIN user ON relationship.User_Userid2=user.UserID 
        WHERE User_Userid1=? AND RelationType= 'Coach' ;" ;
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
else 
{ 
    //placeholder invullen  
    mysqli_stmt_bind_param($stmt,'i',$_SESSION['UserID']); // hangt van username variabele af 2x username want inloggen met mail of username
    mysqli_stmt_execute($stmt);  
    $result = mysqli_stmt_get_result($stmt);
     // stop user id in variabele 
    while($row = mysqli_fetch_assoc($result))
    {
        $client=$row['Firstname'];
        $clientid=$row['User_Userid2'];
        echo "<a href=fakedashboardclient.php?id=$clientid>$client</a>";
        echo '<br>';
    }
}

   
    

    
   
