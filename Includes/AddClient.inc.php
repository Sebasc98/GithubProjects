<?php

if(isset($_POST['signup-client'])) // voor als client toegevoegd wordt
{
    
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

    }
