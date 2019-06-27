<?php
// script voor het plaatsen van een nieuw ticket
// kan door clienten gedaan worden (mogelijk ook coaches)
 
session_start();
if(isset($_POST['nieuwticket-submit']))
{
	require 'dbh.inc.php';
	
	// ticket
	/* omdat we niet helemaal coach pagina gaan ontwikkelen denk ik heb ik nu even gedaan dat
	het coach id gwn moet worden ingevoerd. Komt dit er wel dan wordt dit $SESSION['User_id'] ofz */
	// Titel/onderwerp
	$tickettitel = $_POST['tickettitel'];
	// Coach (aan:)
	$aancoach = $_POST['coachid'];
	// Bericht
	$ticketbericht = $_POST['ticketbericht'];
	// Afkomstig van (DE INGELOGDE GEBRUIKER)
	$SESSION['userid'];
	
	//check of de velden leeg zijn, zo ja geef foutmelding
	if (empty($tickettitel || $aancoach || ticketbericht)
	{
		header("Location: ../nieuwticket.php?error=emptyfieldsorWrongDatatype");
		exit();
	}
	
	//check of query klopt
	else 
	{
		$sql = "INSERT INTO ticket (Subject, Message, ReceiverID, User_Userid)
				VALUES (?, ?, ?, ?); ";
		$stmt = mysqli_stmt_init($conn);
			
			//check of statement goed gaat
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
            echo 'SQL statement failed.';
			}
			mysqli_stmt_bind_param($stmt, 'ssii', $tickettitel, $ticketbericht, $aancoach, $SESSION['userid'];
			mysqli_stmt_execute($stmt);  
			mysqli_stmt_close($stmt);
			header("Location: ../nieuwticket.php?nieuwdossier=succes");
	}
}
	
//SEBAS ONDERSTAANDE CODE KOPIEREN !! IS de SELECT funcite voor weergeven van tickets bij client
$SESSION['clientid'];
//query
	$viewticket = "SELECT Subject FROM ticket
					WHERE User_Userid = ?;";
					/* bovenstaande kan ook zijn
					"SELECT Subject FROM ticket WHERE joined='$SESSION['clientid']'";
					*/
	$stmt = mysqli_stmt_init($conn);
	//check of statement goed gaat
	if(!mysqli_stmt_prepare($stmt, $viewticket))
        {
            echo 'SQL statement failed.';
        }
		mysqli_stmt_bind_param($stmt, 'i', $SESSION['clientid'];
		mysqli_stmt_execute($stmt);  
        mysqli_stmt_close($stmt);
		header("Location: ../nieuwticket.php?nieuwdossier=succes"); //deze nog ff updaten!!
		echo($viewticket);
	
	
