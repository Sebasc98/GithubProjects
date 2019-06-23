<?php
session_start();

if(isset($_POST['login']))// hangt van login knop af

    {
    require 'dbh.inc.php';

    $username = $_POST['email'];
    $wachtwoord = $_POST['pass'];

    if (empty($username) || empty($wachtwoord)){
        header("Location: ../inlog.php?error=emptyfields");
    exit();
    }
    else {
        $sql = "SELECT * FROM inlog INNER JOIN user ON inlog.Userid=user.Userid
        WHERE Username = ? OR Email = ?;";
        $stmt=mysqli_stmt_init($conn);

         // check of query klopt
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../inlog.php?error=sqlerror");
        exit();
    }

    // als klopt dan 
    else {
        //placeholder invullen  
        mysqli_stmt_bind_param($stmt,'ss',$username, $username); // hangt van username variabele af 2x username want inloggen met mail of username
        mysqli_stmt_execute($stmt);  
        $result = mysqli_stmt_get_result($stmt);
        
        // username en wachtwoord controleren
        if ($row = mysqli_fetch_assoc($result)){
           //ww fout
            if($wachtwoord !== $row['Wachtwoord']){
            header("Location: ../inlog.php?error=verkeerdewachtwoord");
            exit();
           }//ww goed
           elseif($wachtwoord == $row['Wachtwoord']){
            
            $_SESSION['UserID'] = $row['Userid'];
            $_SESSION['Username'] = $row['Username'];

            header('Location: ../fakedashboardclient.php');
           }

           
           
    }
      //username fout
            else{
                header("Location: ../inlog.php?error=no_user");
                exit();
            }
}}}
else 
{
    header("Location: inlog.php");
    exit();
}