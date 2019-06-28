<?php
// DEEL 1 : SCRIPT VOOR INLADEN STATUS (VIEW)
// BIJ HET MAKEN VAN EEN NIEUWE CLIENT MOETEN ALLE STATUS'SEN DEFAULT OP 
// DEEL 2 : SCRIPT VOOR BEWERKEN/UPLOADEN STATUS (EDIT)
// 
// 1 -- HET LADEN VAN DE STATUS, NODIG OP DE CLIENT PAGINA
require 'dbh.inc.php';
	
	
	//query
	$viewstatus = "SELECT ID, Housing, Income, Healthcare, Debtcontrol FROM basis WHERE Userid = ?;";
					/* bovenstaande kan ook zijn
					"SELECT ID, Housing, Income, Healthcare, Debtcontrol FROM status WHERE joined='$SESSION['clientid']'";
					*/
					
	$stmt = mysqli_stmt_init($conn);
	//check of statement goed gaat
	if(!mysqli_stmt_prepare($stmt, $viewstatus))
        {
            echo 'SQL statement failed.';
        }
		mysqli_stmt_bind_param($stmt, 'i', $_SESSION['ClientID']);
		mysqli_stmt_execute($stmt);  
		$result = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($result))
		{
		echo($row['ID']);
		echo($row['Housing']);
		echo($row['Income']);
		echo($row['Healthcare']);
		echo($row['Debtcontrol']); // deze print de troep zegmaar als html, voor nu dus alleen 0 of 1 op het scherm en nog geen kruis of uitroepteken!
		mysqli_stmt_close($stmt);
		}
		else {
			echo 'wtf';
		}

// 2 -- HET BEWERKEN VAN DE STATUS (ALLE VELDEN MOETEN INGEVULD ZIJN!!!)
if(isset($_POST['statusupdate-submit']))
{
	require 'dbh.inc.php'; // is dubbel
	// ID kaart status
	$idkaart = $_POST['idkaart'];
	// Housing status
	$huisvesting = $_POST['huisvesting'];
	// Income status
	$inkomen = $_POST['inkomen'];
	// Healthcare status
	$zorg = $_POST['zorg'];
	// Debtcontrol status
	$schulden = $_POST['schulden'];
	
	// check of de vleden leeg zijn, zo ja geef foutmelding
	if (empty($idkaart) || empty($huisvesting) || empty($inkomen) || empty($zorg) || empty($schulden))
	{
		header("Location: ..//nieuwestatus.php?error=emptyfielsorWrongDatatype");
		exit();
	}
	
	// check of de query klopt
	$update = 	"UPDATE basis SET ID = ?, Housing = ?, Income = ?, Healthcare = ?, Debtcontrol = ?
				WHERE Userid = ?;";
				/* bovenstaand kan ook zijn WHERE joined='$SESSION['clientid']'"; */
	$stmt = mysqli_stmt_init($conn);
	//check of statement goed gaat
	if(!mysqli_stmt_prepare($stmt, $update))
        {
            echo 'SQL statement failed.';
        }
		// bij i = 0 betekend NIET geregeld
		// bij i = 1 betekend WEL geregeld
		mysqli_stmt_bind_param($stmt, 'iiiiii', $idkaart, $huisvesting, $inkomen, $zorg, $schuldig, $SESSION['ClientID']);
		mysqli_stmt_execute($stmt);  
        mysqli_stmt_close($stmt);
		header("Location: ../statusupdate.php?bijgewerktestatus=succes"); //deze nog ff updaten!!		
}
	
	