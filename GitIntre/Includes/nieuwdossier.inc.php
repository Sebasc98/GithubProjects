<?php
// Script voor plaatsen nieuw dossier
 
session_start();
if(isset($_POST['nieuwdossier-submit']))
{
	require 'dbh.inc.php';
	
	// TITEL VAN DOSSIER
	$dossiertitel = $_POST['dossiertitel'];
	// DATUM VAN DOSSIER (Wordt niks mee gedaan voorlopig, geen row in database)
	$dossierdatum = $_POST['dossierdatum'];
	// DOSSIER OMSCHRIJVING (OF DATA)
	$dossieromschrijving = $_POST['dossieromschrijving'];	
	// HOORT BIJ CLIENT(ID)
	$clientid = $_SESSION['ClientID'];
	// WAT IS DE USERID VAN DE UPLOADER (????) ----- uploader en client waren al opgeslagen in sessie variabelen
	$userid = $_SESSION['UserID'];
	
	//check of de velden leeg zijn, zo ja geef foutmelding
	if (empty($dossiertitel) || empty($dossierdatum) || empty($dossieromschrijving) || empty($clientid))
		{
			//onderstaande location moet nog geupdate worden
			header("Location: ../dossiertoevoegen.php?error=emptyfieldsorWrongDatatype");
			exit();
		}

	//check of query klopt
	else
	{
		//HIER MOET DE LEFT JOIN NOG BIJ MAAR UGH?? OP CLIENTID ZEGMAAR 
		// --- als je de tabel user met bestand wilt joinen kan je dit doen door join .. ON user.userID=bestand.User_client. Ja de benamingen van de foreign keys zijn
		// -- wat
		$sql = "INSERT INTO bestand (Filename, Description, User_Userid, User_Client)
		VALUES(?, ?, ?, ?); ";
		$stmt = mysqli_stmt_init($conn);
		
		//check of statement goed gaat
		if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo 'SQL statement failed.';
        }
		mysqli_stmt_bind_param($stmt, 'ssii', $dossertitel, $dossieromschrijving, $userid, $clientid);// s staat voor string i staat voor integer
		mysqli_stmt_execute($stmt);  
        mysqli_stmt_close($stmt);
		header("Location: ../dossiertoevoegen.php?nieuwdossier=succes");
	}	
}