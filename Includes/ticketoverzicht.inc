<?php
// script voor het laden van ALLE tickets die er zijn, zodat deze op de ticket pagina worden weergeven
// deze pagina is alleen voor de coach toegankelijk denk ik?

// DEEL 1 : OVERZICHT VOOR PERMISSIE ALS COACH
// DEEL 2 : OVERZICHT VOOR INGELOGD ALS CLIENT (Specifieke gebruiker).

session_start();
require 'dbh.inc.php';

// DEEl 1 : OVERZICHT ALS COACH
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
		
		// COACH JA OF NEE? 
// ------------------------------------
//OF MOET $WELKERROL SOMS $STMT ZIJN????? OM DE QUERY RESULTAAT TE CHECKEN??
		if($welkerol == "Coach"){
			// weergeef alles
			$weergeefalletickets = "SELECT Ticketid, Subject, Priority, Status FROM ticket;";
			$stmt = mysqli_stmt_init($conn);
			
			//check of statement goed gaat
			if(!mysqli_stmt_prepare($stmt, $weergeefalletickets))
			{
            echo 'SQL statement failed.';
			}
			mysqli_stmt_execute($stmt);  
			mysqli_stmt_close($stmt);
// --------------------------------
// OF MOET $WEERGEEFALLETITICKETS SOMS $STMT ZIJN????
			echo($weergeefalletickets);
		}
		
		// IS CLIENT JA OF NEE?
// ------------------------------------
// OF MOET $WELKEROL SOMS $STMT ZIJN???
		else if ($welkerol == "Client"){
			//weergeef eigen tickets
			$weergeefeigentickets = "SELECT Ticketid, Subject, Status FROM ticket
									 WHERE User_Userid = ?;";
									 $stmt = mysqli_stmt_init($conn);
			//check of statement goed gaat
			if(!mysqli_stmt_prepare($stmt, $weergeefeigentickets))
			{
				echo 'SQL statement failed.';
			}
			mysqli_stmt_bind_param($stmt, 'i', $SESSION['clientid'];
			mysqli_stmt_execute($stmt);  
			mysqli_stmt_close($stmt);
			//print op scherm
			echo($weergeefeigentickets);
		}
			
		// IS GEEN WERKENDE ROL
		else {
			$geentoegang = "Helaas, u heeft geen inzichten in de tickets.\n\n
							Denkt u dat dit een fout is? Raadpleeg dan uw contactpersoon of supervisor.";
			echo($geentoegang);
		}
		
	
	
