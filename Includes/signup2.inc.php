<?php
session_start();

if(isset($_POST['signup-submit'])) // hangt van de naam van submit af. 
{
    require 'dbh.inc.php';

    $username = $_POST['username'];
    $password = $_POST['Wachtwoord1'];
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $age = $_POST['leeftijd'];
    $phone = $_POST['phone'];
    $access = $_POST['Access'];
    $passwordrepeat = $_POST['Wachtwoord2'];
    $mail = $_POST['mail'];
    
    //error handlers
    // check of er iets leeg is
    if (empty($username)||empty($username)||empty($username)||empty($username)||empty($username) )
    {
        header("Location: ../Accountmaken.php?error=emptyfields&username=".$username."&mail=".$mail) ; // filenaam hangt van de registratiepagina af
        exit();
        
    }
    // check of ww juist herhaald is
    elseif($password !== $passwordrepeat)
    {
        header("Location: ../Accountmaken.php?error=passwordcheck");
        exit();
    }
        
    // check of username al genomen is WERKT
    else 
    {
        $sql = "SELECT Username FROM inlog WHERE Username = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        // check of query klopt
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../Accountmaken.php?error=sqlerror");
            exit();
        }
            
        // als klopt dan 
        else 
        {
            //placeholder invullen
            mysqli_stmt_bind_param($stmt,'s',$username); // hangt van username variabele af
            mysqli_stmt_execute($stmt);  
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
                
            if($resultCheck>0)
            {
                header("Location: ../Accountmaken.php?error=usernametaken");
                exit();
            }
                
            // als registratie correct gedaan is. Insert WERKT
            else 
            {
                $x= 'test'; $y= 'test!';
                    
                $sql = "INSERT INTO Inlog(Username, Wachtwoord)  VALUES(?, ?); ";
                $stmt = mysqli_stmt_init($conn);
                
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo 'SQL statement failed.';
                }
                    
                else 
                {
                    mysqli_stmt_bind_param($stmt,'ss',$x,$y);
                    mysqli_stmt_execute($stmt);  
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    header("Location: ../Accountmaken.php?signup=succes");
                    exit();
                }
            }
        }   
    }
}

else
{
    header("Location: ../inlogaanmaken.php?fout");
    exit();
}