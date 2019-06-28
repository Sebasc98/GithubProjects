<?php
// SCRIPT WERKT 100%
// Script die de activatie code controleert.
session_start();
if(isset($_POST['activatiecode-submit']))
{
   require 'dbh.inc.php';
   
    $activationcode = $_POST['activationcode'];
    // check of leeg is of verkeerde datatype

    if (empty($activationcode))
    {
        header("Location: ../inlogaanmaken.php?error=emptyfieldsorWrongDatatype"); 
        exit();
    }

    else // check of query klopt 
    {    
        $sql = "SELECT * FROM activationcode
        WHERE Code = ?;";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../inlogaanmaken.php?error=sqlerror");
            exit();
        }

       
        else  // als query  klopt dan 
        {
            //placeholder invullen  
            mysqli_stmt_bind_param($stmt,'s',$activationcode);
            mysqli_stmt_execute($stmt);  
            $result = mysqli_stmt_get_result($stmt);// resultaat maar kan niks zijn
            
            // activationcode controleren
            if ($row = mysqli_fetch_assoc($result))// Activationcode is goed
            {          
                    $_SESSION['activationcode'] = $row['Code'];
                    $_SESSION['activatiecodeid'] = $row['Activationcodeid'];
                    // sessievariabele toewijzen kijk welke organisatie hoor bij activatiecode
                    $_SESSION['organisationid'] = $row['Organisationid'];

                    header('Location: ../Accountgegevens.php');
                                
            }   
            
            else // activation code is fout
                {
                    header("Location: ../inlogaanmaken.php?error=WrongCode"); 
                    exit();
                }
            
        }
    }   
}

else{
        header("Location: ../inlogaanmaken.php");
        exit();
    }
