<?php // script voor persoonsgegevens van alle gebruiker behalve de client bedoelt voor de pagina na de login.

require 'dbh.inc.php';
$sql = "SELECT * FROM organisation LEFT JOIN user ON organisation.Organisationid=user.Organisation_Organisationid
WHERE Userid=?;";

/*LEFT JOIN bestand ON user.Userid= bestand.User_Userid

LEFT JOIN ticket ON user.Userid=ticket.User_Userid
LEFT JOIN relationship ON user.Userid=relationship.User_Userid1
LEFT JOIN user ON organisation.Organisationid=user.Organisation_Organisationid WHERE Userid=?;";*/


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