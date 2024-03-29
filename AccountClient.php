<?php
//Pagina voor wanneer coach een account wilt aanmaken voor client
require 'header.php';
$_SESSION['signuptype']='Client'
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action='Includes/signup2.inc.php' method='post'>
					<span id="accountMaken" class="login100-form-title p-b-33">
						 Account maken cliënt
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
              <p>Mail</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Mail" placeholder="Mail">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Voornaam</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Voornaam" placeholder="Voornaam">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Tussenvoegsel</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Tussenvoegsel" placeholder='Tussenvoegsel'>
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Initialen</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="text" name="Initialen" placeholder='Initialen'>
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <p>Achternaam</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Voornaam is needed">
            <input class="input100" type="text" name="Achternaam" placeholder="Achternaam">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Geboortedatum</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="date" name="Geboortedatum" placeholder="Geboortedatum">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Telefoonnummer</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Telefoonnummer" placeholder="Telefoonnummer">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Straat</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Straat" placeholder="Straat">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Nummer</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Nummer" placeholder="Nummer">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Postcode</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Postcode" placeholder="Postcode">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Woonplaats</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Woonplaats" placeholder="Woonplaats">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Nationaliteit</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Nationaliteit" placeholder="Nationaliteit">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Burgerlijke staat</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="BurgerlijkeStaat" placeholder="Burgerlijke staat">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>In instelling?</p>
              <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <select class="custom-select" id="inputGroupSelect01" name='Instelling'>
          <option selected>Kies...</option>
          <option value="2">Ja</option> 
          <option value="3">Nee</option>
           
         
        </select>
      </div>
          </div>
        </div>
      </div>
</div>
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type='submit' name='signupclient-submit'>
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