<?php
// script voor het laden van de contacntenpagina
// helaas werkt er geen contactenfunctie tussen bijv coaches onderling, dus momenteel
// worden op deze pagina alle clienten weergeven.

// DEEL 1 : CHECK ROL
// DEEL 2 : PAGINA VOOR PERMISSIE ALS COACH
// DEEL 3 : PAGINA VOOR PERMISSIE ALS ANDERE ROL

session_start();
require'dbh.inc.php';

// DEEL 1 : CHECK ROL
$SESSION['userid'];
$coach = $SESSION['userid']; // kan dit?
$welkerol = "SELECT Access FROM user
			 WHERE Userid = ?;";
			/* bovenstaande kan ook zijn
			"SELECT Access FROM user WHERE joined='$SESSION['clientid']'";
			*/
	$stmt = mysqli_stmt_init($conn);
	//check of statement goed gaat
	if(!mysqli_stmt_prepare($stmt, $welkerol))
        {
            echo 'SQL statement failed.';
        }
		mysqli_stmt_bind_param($stmt, 'i', $coach;
		mysqli_stmt_execute($stmt);  
        mysqli_stmt_close($stmt);
		
// DEEL 2 : PAGINA VOOR COACH
	if($welkerol == "Coach"){
		// weergeef clienten
		$weergeefclienten = "SELECT Userid, Firstname, Lastname, Email, Phone, DateOfBirth FROM user
							 WHERE Access = 'Client';";
		$stmt = mysqli_stmt_init($conn);
			
			//check of statement goed gaat
			if(!mysqli_stmt_prepare($stmt, $weergeefclienten))
			{
            echo 'SQL statement failed.';
			}
			mysqli_stmt_execute($stmt);  
			mysqli_stmt_close($stmt);
			//print dit
			echo($weergeefclienten);
	}
	
// DEEL 3 : PAGINA ALS IEMAND ANDERS
	else {
		echo("Helaas, niks om te weergeven.\n\n
				Denkt u dat dit een fout is? Neem dan contact op met de beheerder.");
	}
	
