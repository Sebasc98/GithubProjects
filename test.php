<?php
require_once "Includes/dbh.inc.php";
require 'header.php'; 
if(isset($_SESSION['UserID'])){
    echo 'Ingelogd';
}
else {
    echo 'Niet ingelogd';
}
?>

<html>
<body>

<?php
    $Gebruikerid = 1;
    // placeholder Select
    $sql = "SELECT * FROM user WHERE userid = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    // check of query klopt
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'SQL statement failed.';
    }
    // als klopt dan 
    else {
        //placeholder invullen
        mysqli_stmt_bind_param($stmt,'i',$Gebruikerid);
        mysqli_stmt_execute($stmt);  
        $result = mysqli_stmt_get_result($stmt);
      
    
        while ($row = mysqli_fetch_assoc($result)){
            echo '<br>'.$row['Firstname'];}
    }
        
        //$row = mysqli_fetch_assoc($result);
        //$x = $row['Firstname'];
        //echo $x;}
   
// check of username al genomen is
$username ='SebasC98';
    $sql = "SELECT Username FROM inlog WHERE Username = ?;";
    $stmt = mysqli_stmt_init($conn);

// check of query klopt
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo 'SQL statement failed.';
    exit();
}
// als klopt dan 
else {
    //placeholder invullen
    mysqli_stmt_bind_param($stmt,'s',$username); // hangt van username variabele af
    mysqli_stmt_execute($stmt);  
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck>0){
        echo 'username taken';
    }

}
$username = 'SebaSC98';
$wachtwoord = 'Password!';

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
    header("Location: ../ inlog.php?error=sqlerror");
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
        header("Location: ./fakeindex.php?error=verkeerdewachtwoord");
        exit();
       }//ww goed
       elseif($wachtwoord == $row['Wachtwoord']){
        
        $_SESSION['UserID'] = $row['Userid'];
        

        header("Location: ./fakedashboardclient.php");
       }

      
      
}
  //username fout
        else{
            header("Location: ./fakeindex.php?error=no_user");
            exit();
        }  
}
}
?>

<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>






<?php
function testfun()
{
   echo "Your test function on button click is working";
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
<form action= "Includes/logout.inc.php" method="post">
    <input type="submit" name="test" id="test" value="Uitloggen" /><br/>
</form>

</body>
</html>