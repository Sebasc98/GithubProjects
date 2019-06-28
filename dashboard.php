<?php
//client dashboard/pagina 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Infomartiekunde Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="dashboard.css">
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
            <li><a href="Includes/logout.inc.php">Log uit-(naam inlog DATABASE)</a></li>

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
  </nav>

<div class="dashboard">
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
      <div class="jumbotron">
        <h2>Naam (uitdatabase)</h2>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Voornaam</h5>
              <p>DATABASE</p>

              <h5>Initialen</h5>
              <p>DATABASE</p>

              <h5>Tussenvoegsel</h5>
              <p>DATABASE</p>

              <h5>Achternaam</h5>
              <p>DATABASE</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Geboortedatum</h5>
              <p>DATABASE</p>

              <h5>Nationaliteit</h5>
              <p>DATABASE</p>

              <h5>Burgelijke staat</h5>
              <p>DATABASE</p>

              <h5>Telefoonnummer</h5>
              <p>DATABASE</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Woonplaats</h5>
              <p>DATABASE</p>

              <h5>Huisnummer</h5>
              <p>DATABASE</p>

              <h5>Straat</h5>
              <p>DATABASE</p>

              <h5>Postcode</h5>
              <p>DATABASE</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              Placeholder
              <img src="#" >
              <h5>In instelling</h5>
              <p>Welke instelling DATABASE</p>
              <input type="checkbox">

            </div>

          </div>

        </div>

      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="jumbotron">
        <h2>Relaties</h2>

        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <h5>Internal coach</h5>
                <p>Database</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <h5>External coach</h5>
                  <p>Database</p>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <h5>Anderen</h5>
              <p>Database</p>
              <a href="url">Bewerk</a>
              <hr>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="url">Opmerkingen</a>
</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <a href="url">Opmerking toevoegen</a>
              </div>


      </div>
      </div>
    </div>
    </div>
  </div>
  </div>

<div class="container">
  <div class="jumbotron">
    <h2>Status</h2>
        <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
              <img src="icon3.png" >
            Geldige legitimatie
            <a href="url">Bewerk</a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
              <img src="icon5.png" >
            Huisvesting
            <a href="url">Bewerk</a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <img src="icon3.png" >
          Inkomen
          <a href="url">Bewerk</a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <img src="icon3.png" >
            Inzichten in schuld(en)-problematiek
            <a href="url">Bewerk</a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
              <img src="icon5.png" >
            Zorg en Zorgverzekering
            <a href="url">Bewerk</a>
          </div>
  </div>
</div>
</div>
</div>


<div class="container">
  <div class="jumbotron">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2>Tickets</h2>
                <button type="button" name="button" style="float: right;">Ticket Openen</button>
    </div>

<hr>

</div>

        <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p>Ticket 1</p>
            <hr>
            <p>Ticket 2</p>
            <hr>
            <p>ticket 3</p>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p>Ticket 4</p>
            <hr>
            <p>Ticket 5</p>
            <hr>
            <p>ticket 6</p>

          </div>

  </div>
</div>
</div>
</div>


  </div>
  </div>



</body>
</html>
