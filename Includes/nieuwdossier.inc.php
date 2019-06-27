<?php
// Script voor plaatsen nieuw dossier
// natuurlijk matchen de variabelen van de $POST's niet met de dossier pagina, maar dit komt omdat
// deze nog niet ontworpen is.. 

//BELANGRIJK CHECK DIT NOG EVEN AUB
// ---  Klopt de Location: van de foutmelding? 
// ANSWER: het klopt wanneer we een pagina 'dossiertoevoegen.php' hebben, nu wordt je verwezen naar een pagina die niet bestaat
// ---  De SQL query moet een LEFT JOIN o.i.d. worden met WHERE clientid = clientid om te checken of de client bestaat. 
//		Als dit niet het geval is, moet het dossier niet geupload kunnen worden. Hoe doe ik dit?
// ANSWER: in de activatiecode inc wordt gecontroleerd of de activatiecode overeenkomt met de code in de database, precies wat jij met client wilt doen 
// --- Een ander oplossing, wat bovenstaande check overbodig zou maken, zou zijn dat op de  pagina van de client na zo'n session_start() 
// --- je meteen een sessie variabele aanmaakt met als waarde de userid van de client dan hoef de gebruiker geen id in te voeren en 
// --- hoef je de controle ook niet te doen. De sessie variabele zou je dan kunnen gebruiken in je query om het bestand toe te voegen aan db.
/* VOORBEELD: (clientpage van een client) 
session_start(); 
$SESSION['clientid']; doordat je session_start() in nieuwdossier.inc hebt staan heb je toegang tot deze variabele
Je query is al goed alleen je moet dan wel $clientid vervangen met $SESSION['clientid']  

*/
// ---  Moet er nog een exit(); onderaan? of niet?         
// ANSWER: exit wordt zover ik geleerd heb in deze 5 dagen ;) gebruikt bij error handlers dus wat staat klopt 

// klopt dit? of moet dezelfde sessie door gaan (na inlog) -------- 
// ANSWER: Ja session start() klopt, als die er niet in staat dan zijn de sessie variabelen, 
// verdwenen of heb je in ieder geval geen toegang tot de sessie variabelen in dit script



// DIT GAAT NIET OVER DE SCRIPT( Mijn doel voor morgen)
// ik ga morgen ochtend verder werken aan de script 'userinfo.inc' deze wordt gebruikt om de attributen van de gebruiker op te slaan in sessie variabelen
// zodat wanneer je inlogt je gegevens weergeven worden en dat de gegevens op de clienten pagina klopt. Nadat dit gedaan is ga ik ervoor zorgen dat
// de coach een client kan aanmaken dit lijkt heel veel op de sign up script alleen iets anders
// Verder ga ik er voor zorgen dat de coach een overzicht ziet van zijn clienten. coach klikt op naam en komt dan op clienten pagina.
// Als dit gedaan is en het dossier systeem dan hebben we zo'n beetje de belangrijkste case van de site af. 
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
	$clientid = $_POST['clientid'];
	// WAT IS DE USERID VAN DE UPLOADER (????)
	$userid = $_POST['userid'];
	
	//check of de velden leeg zijn, zo ja geef foutmelding
	if (empty($dossiertitel || $dossierdatum || $dossieromschrijving || $clientid))
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