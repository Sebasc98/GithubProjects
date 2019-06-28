<?php
//deze pagina is klaar
// Start the session
session_start();
// bepalen waar de logo naar toe wijst 
if(empty($_SESSION['UserID']) && empty($_SESSION['ClientID']))
{
    $link = 'index.php';
}
elseif(empty($_SESSION['UserID']))
{
    $link = 'dashboard.php';
}
else 
{
    $link = 'overzicht.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link href="index.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="inlogExtra.css">
	<link rel="stylesheet" type="text/css" href="Accountmaken.css">

</head>
<body>

	<nav class="navbar navbar-default navbar-Fixed-top" role="navigation">
	    <div class="container-fluid">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
	          <span class="sr-only"> Toggle navigation </span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>

	        </div>

	      </div>
	      <div class="collapse navbar-collapse" id="navbar-colapse-main">
	        <ul class="nav navbar-nav navbar-left">
	            <li><a class="navbar-brand" href=<?php echo $link ;?>><img src="img/logo3.png"></a></li>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a href="overons.php">Over ons</a></li>
          <li><a href="missie.php">Missie & Visie</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li>
	  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
	</li>
	    </div>

	</nav>

  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action='Includes/signup2.inc.php' method='post'>
					<span id="accountMaken" class="login100-form-title p-b-33">
						 Account maken
					</span>

<div class="Accountgegevens">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Gebruikersnaam</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Mail</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Mail" placeholder="Mail">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Wachtwoord</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="password" name="Wachtwoord1">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Herhaal wachtwoord</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="password" name="Wachtwoord2">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Functie/rol</p>
              <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <select class="custom-select" id="inputGroupSelect01" name='Functie'>
          <option selected>Kies...</option>
          <option value="2">Coach</option> 
          <option value="3">Reclassering</option>
          <option value="4">Iemand anders</option>   
          

          
          
        </select>
      </div>
          </div>
        </div>
      </div>
</div>
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type='submit' name='signup-submit'>
							Ga verder
						</button>
					</div>

					</div>

			</div>
		</div>




	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
