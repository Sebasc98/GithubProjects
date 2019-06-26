<?php
// SCRIPT WERKT 100%
// Script voor inloggen

session_start();

if(isset($_POST['login']))// hangt van login knop af

{
    require 'dbh.inc.php';

    $username = $_POST['email'];
    $wachtwoord = $_POST['pass'];

    if (empty($username) || empty($wachtwoord))
    {
        header("Location: ../inlog.php?error=emptyfields");
        exit();
    }
    
    else 
    {
        $sql = "SELECT * FROM inlog INNER JOIN user ON inlog.Userid=user.Userid
        WHERE Username = ? OR Email = ?;";
        $stmt=mysqli_stmt_init($conn);

         // check of query klopt
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../inlog.php?error=sqlerror");
            exit();
        }

        // als klopt dan 
        else 
        {
            //placeholder invullen  
            mysqli_stmt_bind_param($stmt,'ss',$username, $username); // hangt van username variabele af 2x username want inloggen met mail of username
            mysqli_stmt_execute($stmt);  
            $result = mysqli_stmt_get_result($stmt);
            
            // username en wachtwoord controleren
            if ($row = mysqli_fetch_assoc($result))
            {
                //ww fout
                if($wachtwoord !== $row['Wachtwoord'])
                {
                    header("Location: ../inlog.php?error=verkeerdewachtwoord");
                    exit();
                }
                //ww is goed alle informatie die nodig is 
                elseif($wachtwoord == $row['Wachtwoord'])
                {
                    // alle userinfo 
                    $_SESSION['UserID'] = $row['Userid'];
                    require 'Userinfo.inc.php'; // script dat alle informatie over de user opslaat in sessie variabelen.
                    
                    header('Location: ../fakedashboardclient.php');        
                }

            }
            //username fout
            else
            {
                header("Location: ../inlog.php?error=no_user");
                exit();
            }
        }
    }
}
else 
{
    header("Location: inlog.php");
    exit();
}