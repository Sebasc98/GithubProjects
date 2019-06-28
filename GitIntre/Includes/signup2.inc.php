<?php
//Script voor registreren werkt 100%
session_start();

if(isset($_POST['signup-submit'])) // dit is voor de accountgegevens form WERKT
{
    require 'dbh.inc.php';

    $username = $_POST['Gebruikersnaam'];    
    $mail = $_POST['Mail'];
    $password = $_POST['Wachtwoord1'];
    $passwordrepeat = $_POST['Wachtwoord2'];
    // signuptype geeft aan of dit om een client gaat of niet
    if(empty($_SESSION['signuptype']))
    {
        $functie = $_POST['Functie'];
    }
    else
    {
        $functie =$_SESSION['signuptype'];
    }
    
    //error handlers
    // check of er iets leeg is
    if (empty($username)||empty($mail)||empty($password)||empty($passwordrepeat)||empty($functie) )
    {
        header("Location: ../Accountgegevens.php?error=emptyfields") ; // filenaam hangt van de registratiepagina af
        exit();
        
    }
    elseif ($functie == 'Kies...')
    {
        header("Location: ../Accountgegevens.php?error=Kies!");
        exit();
    }
    // check of ww juist herhaald is
    elseif($password !== $passwordrepeat)
    {
        header("Location: ../Accountgegevens.php?error=passwordcheck");
        exit();
    }
        
    // check of username al genomen is WERKT
    else 
    {
        $sql = "SELECT * FROM inlog INNER JOIN user ON inlog.Userid=user.Userid
        WHERE Username = ? OR Email = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        // check of query klopt
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../Accountgegevens.php?error=sqlerror");
            exit();
        }
            
        // als klopt dan 
        else 
        {
            //placeholder invullen
            mysqli_stmt_bind_param($stmt,'ss',$username, $username ); // hangt van username variabele af
            mysqli_stmt_execute($stmt);  
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
                
            if($resultCheck>0)
            {
                header("Location: ../Accountgegevens.php?error=usernamemailtaken");
                exit();
            }
                
            // als form  correct gedaan is. 
            else 
            {
                    $_SESSION['username'] = mysqli_real_escape_string($conn, $username);
                    $_SESSION['password'] = mysqli_real_escape_string($conn, $password);
                    $_SESSION['functie'] = $functie ;
                    $_SESSION['mail'] = $mail;
                    header("Location: ../Accountmaken.php?Accountgegevens=succes");
                    exit();
            }
        }
    }   
}

elseif(isset($_POST['signup-submit2'])) // dit is voor de accountmaken form
{
    require 'dbh.inc.php';

    $voornaam = $_POST['Voornaam'];    
    $tussenvoegsel = $_POST['Tussenvoegsel'];
    $initialen = $_POST['Initialen'];
    $achternaam = $_POST['Achternaam'];
    $geboortedatum = $_POST['Geboortedatum'];
    $telefoonnummer = $_POST['Telefoonnummer'];
    $straat = $_POST['Straat'];
    $nummer = $_POST['Nummer'];
    $postcode = $_POST['Postcode'];
    $woonplaats = $_POST['Woonplaats'];
    
    //error handlers
    // check of er iets leeg is
    if (empty($voornaam)||empty($initialen)||empty($achternaam)||empty($geboortedatum)||empty($telefoonnummer)
    ||empty($straat) ||empty($nummer) ||empty($postcode) ||empty($woonplaats))
    {
        header("Location: ../Accountmaken.php?error=emptyfields") ;
        exit();
        
    }
    else 
    {
        // gegevens in tabel invoeren werkt
       
        $sql = "INSERT INTO user(Firstname, Lastname, Tussenvoegsel, Initialen, DateOfBirth, Email, Phone, Access, Organisation_Organisationid)  
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?); ";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
         
        // tabel user wordt hier ingevuld WERKT
        mysqli_stmt_bind_param($stmt,'ssssssssi',$voornaam, $achternaam, $tussenvoegsel, $initialen, $geboortedatum, $_SESSION['mail'], $telefoonnummer,
        $_SESSION['functie'], $_SESSION['organisationid']);
        mysqli_stmt_execute($stmt);  
        mysqli_stmt_close($stmt);
        

        //user id ophalen nodig om te verbinden met tabel adres
        $id = mysqli_insert_id($conn);
  
        //tabel adres invullen
        $sql = "INSERT INTO adres(Street, Housenumber, Zipcode, CITY, User_Userid)  
        VALUES(?, ?, ?, ?, ?); ";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
            
        else 
        {  // tabel adres wordt hier ingevuld WERKT
            mysqli_stmt_bind_param($stmt,'sissi',$straat, $nummer, $postcode, $woonplaats, $id);
            mysqli_stmt_execute($stmt);  
            mysqli_stmt_close($stmt);
        }

         //tabel inlog invullen WERKT
         $sql = "INSERT INTO inlog(Username, Wachtwoord, Userid, Activationcode_Activationcodeid)  
         VALUES(?, ?, ?, ?); ";
         $stmt = mysqli_stmt_init($conn);
 
         if(!mysqli_stmt_prepare($stmt, $sql))
         {
             echo 'SQL statement failed.';
         }
         else  
         {
            mysqli_stmt_bind_param($stmt,'ssii', $_SESSION['username'], $_SESSION['password'], $id, $_SESSION['activatiecodeid'] );
            mysqli_stmt_execute($stmt);  
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            session_unset();
            session_destroy();
            header("Location: ../inlog.php?signup=succes");
         } 

    }

}///// CLIENT TOEVOEGEN WERKT 
elseif(isset($_POST['signupclient-submit']))
{
    require 'dbh.inc.php';
    // alle variabelen krijgen een waarde toegewezen GETEST EN WERKT
    $username = $_POST['Gebruikersnaam'];    
    $mail = $_POST['Mail'];
    $password = $_POST['Wachtwoord1'];
    $passwordrepeat = $_POST['Wachtwoord2'];
    $functie =$_SESSION['signuptype'];
    $voornaam = $_POST['Voornaam'];    
    $tussenvoegsel = $_POST['Tussenvoegsel'];
    $initialen = $_POST['Initialen'];
    $achternaam = $_POST['Achternaam'];
    $geboortedatum = $_POST['Geboortedatum'];
    $telefoonnummer = $_POST['Telefoonnummer'];
    $straat = $_POST['Straat'];
    $nummer = $_POST['Nummer'];
    $postcode = $_POST['Postcode'];
    $woonplaats = $_POST['Woonplaats'];
    $instelling = $_POST['Instelling'];
    $burgerlijkestaat= $_POST['BurgerlijkeStaat'];
    $nationaliteit= $_POST['Nationaliteit'];

    //error handlers
    // check of er iets leeg is
    if (empty($username) || empty($mail) || empty($password) ||empty($passwordrepeat) ||empty($functie) ||empty($voornaam)
    ||empty($initialen) ||empty($achternaam) ||empty($geboortedatum) ||empty($telefoonnummer) ||empty($straat) ||empty($nummer)
    ||empty($postcode) ||empty($woonplaats) || empty($burgerlijkestaat) || empty($nationaliteit) )
    {
        header("Location: ../AccountClient.php?error=emptyfields") ; 
        exit();
        
    }
    elseif ($instelling == 'Kies...')
    {
        header("Location: ../AccountClient.php?error=Kies!");
        exit();
    }
    // check of ww juist herhaald is
    elseif($password !== $passwordrepeat)
    {
        header("Location: ../AccountClient.php?error=passwordcheck");
        exit();
    }
        
    // check of username al genomen is WERKT
    else 
    {
        $sql = "SELECT * FROM inlog INNER JOIN user ON inlog.Userid=user.Userid
        WHERE Username = ? OR Email = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        // check of query klopt
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../AccountClient.php?error=sqlerror");
            exit();
        }
            
        // als klopt dan 
        else 
        {
            //placeholder invullen
            mysqli_stmt_bind_param($stmt,'ss',$username, $username ); // hangt van username variabele af
            mysqli_stmt_execute($stmt);  
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
                
            if($resultCheck>0)
            {
                header("Location: ../AccountClient.php?error=usernamemailtaken");
                exit();
            }
            // Hier dus alle gegevens van client invullen.
            else 
            {
                if($instelling == 'Ja')       
                {
                        $instelling = 1;
                }
                else 
                {
                    $instelling = 0;        
                }
                $sql = "INSERT INTO user(Firstname, Lastname, Tussenvoegsel, Initialen, DateOfBirth, Email, Phone, Access, Captive, BurgerlijkeStaat, Nationaliteit)  
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../AccountClient.php?error=sqlerror");
                    exit();
                }

                // tabel user wordt hier ingevuld WERKT
                mysqli_stmt_bind_param($stmt,'ssssssssiss',$voornaam, $achternaam, $tussenvoegsel, $initialen, $geboortedatum, $mail, $telefoonnummer,
                $_SESSION['signuptype'], $instelling, $burgerlijkestaat, $nationaliteit);
                mysqli_stmt_execute($stmt);  
                mysqli_stmt_close($stmt);
                //user id ophalen nodig om te verbinden met tabel adres
                $id = mysqli_insert_id($conn);
        
                //tabel adres invullen
                $sql = "INSERT INTO adres(Street, Housenumber, Zipcode, CITY, User_Userid)  
                VALUES(?, ?, ?, ?, ?); ";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo 'SQL statement failed.';
                }
                    
                else 
                {  // tabel adres wordt hier ingevuld WERKT
                    mysqli_stmt_bind_param($stmt,'sissi',$straat, $nummer, $postcode, $woonplaats, $id);
                    mysqli_stmt_execute($stmt);  
                    mysqli_stmt_close($stmt);
                }

                //tabel inlog invullen WERKT
                $sql = "INSERT INTO inlog(Username, Wachtwoord, Userid)  
                VALUES(?, ?, ?); ";
                $stmt = mysqli_stmt_init($conn);
        
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../AccountClient.php?error=sqlerror");
                    exit();
                }
                else 
                {
                    mysqli_stmt_bind_param($stmt,'ssi', $username, $password, $id);
                    mysqli_stmt_execute($stmt);  
                    mysqli_stmt_close($stmt);  
                } 
                /// RELATIONSHIP TABLE INVULLEN
                $type ='Coach';
                $sql = "INSERT INTO relationship(RelationType, User_Userid1, User_Userid2)  
                VALUES(?, ?, ?); ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../AccountClient.php?error=sqlerror");
                    exit();
                }
                mysqli_stmt_bind_param($stmt,'sii', $type, $_SESSION['UserID'], $id);
                mysqli_stmt_execute($stmt);  
                mysqli_stmt_close($stmt);
                $type = 'Client';
                $sql = "INSERT INTO relationship(RelationType, User_Userid1, User_Userid2)  
                VALUES(?, ?, ?); ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../AccountClient.php?error=sqlerror");
                    exit();
                }
                mysqli_stmt_bind_param($stmt,'sii', $type, $id, $_SESSION['UserID'] );
                mysqli_stmt_execute($stmt);  
                mysqli_stmt_close($stmt);

                //tabel status invullen
                $default = 2;
                $sql = "INSERT INTO basis(ID, Housing, Income, Healthcare, Debtcontrol, Userid) VALUES(?, ?, ?, ?, ?, ?);";
                 $stmt = mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt, $sql))
                 {
                     header("Location: ../AccountClient.php?error=sqlerror");
                     exit();
                 }
                mysqli_stmt_bind_param($stmt,'iiiiii', $default, $default, $default, $default, $default, $id );
                mysqli_stmt_execute($stmt);  
                mysqli_stmt_close($stmt);


            }
            header('Location: ../fakeuserdashboard.php?clienttoegevoegd');
        }
    }
}


else
{
    header("Location: ../inlogaanmaken.php?fout");
    exit();
}