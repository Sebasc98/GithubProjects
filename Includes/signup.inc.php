<?php
session_start();
if(isset($_POST['activatiecode-submit']))
{
    //header("Location: ../Accountmaken.php");
    //exit();}
    

   require 'dbh.inc.php';
    $activationcode = $_POST['activationcode'];
    // check of leeg is of verkeerde datatype(werkt)

    if (empty($activationcode))
    {
        header("Location: ../inlogaanmaken.php?error=emptyfieldsorWrongDatatype") ; 
        exit();
    }
    else {    // check of query klopt (werkt)
        $sql = "SELECT * FROM activationcode
        WHERE Code = ?;";
        $stmt=mysqli_stmt_init($conn);

     
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../inlogaanmaken.php?error=sqlerror");
            exit();
            }

        // als query  klopt dan 
        else {
            //placeholder invullen  
            mysqli_stmt_bind_param($stmt,'s',$activationcode);
            mysqli_stmt_execute($stmt);  
            $result = mysqli_stmt_get_result($stmt);
            
            // activationcode controleren
            if ($row = mysqli_fetch_assoc($result)){
            //code is fout DIT WERKT NIET
                if($activationcode !== $row['Code']){
                header("Location: ../inlogaanmaken.php?error=verkeerdecode");
                exit();
            }//activatiecode is goed en werkt
                elseif($activationcode == $row['Code']){
                
                $_SESSION['activationcode'] = $row['Code'];
                header('Location: ../Accountmaken.php');
                
            }
            else{
                header('Location: ../inlogaanmaken.php?error=verkeerdecode');
                exit();
            }
                }
            }
        }   
    }



    

    else{
        header("Location: ../inlogaanmaken.php");
        exit();
    }
?>