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
	<link rel="stylesheet" type="text/css" href="accountMaken.css">
  <link rel="stylesheet" href="navbar.css">

</head>
<body>

  <nav class="navbar navbar-Fixed-top" role="navigation" id="navbar1">
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
            <li><a href="#">Intré</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" id="loguit">
              <li><a href="#">Log uit-(naam inlog DATABASE)</a></li>

          </ul>
      </div>

  </nav>
  <nav class="navbar navbar-default navbar-Fixed-top" role="navigation" id="navbar2">
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
            <li><a  class="nav-link active" href="#">Overzicht</a></li>
            <li><a href="#">Clienten</a></li>
            <li><a href="#">Tickets</a></li>
            <li><a href="#">Contacten</a></li>
            <li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <input class="form-control" type="text" placeholder="Doorzoek Intré" aria-label="Doorzoek Intré">
            </ul>

      </div>
      <hr/>

      <ul class="nav navbar-nav navbar-left" id="tabjes">
        <li><a href="#"> Tabje 1</a></li>
        <li><a href="#"> Tabje 2</a></li>
        <li><a href="#"> Tabje 3</a></li>
        <li><a href="#"> Tabje 4</a></li>
      </ul>

    </nav>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span id="accountMaken" class="login100-form-title p-b-33">
						 Statusupdate
					</span>

<div class="Accountgegevens">
    <div class="container">
    <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <p>Id kaart</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Voornaam is needed">
            <input class="input100" type="var" name="Id kaart" placeholder="Id kaart">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Huisvesting</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Tussenvoegsel is needed">
            <input class="input100" type="var" name="Huisvesting" placeholder="Huisvesting">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Inkomen</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Achternaam is needed">
            <input class="input100" type="var" name="Inkomen" placeholder="Inkomen">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Zorg</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Geboortedatum is needed">
            <input class="input100" type="var" name="Zorg" placeholder="Zorg">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Schulden</p>
          <div class="wrap-input100 validate-input" data-validate = "Valid Telefoonnummer is needed">
            <input class="input100" type="var" name="Schulden" placeholder="Schulden">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

        </div>
      </div>
</div>


					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Status updaten
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
