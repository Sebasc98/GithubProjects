<?php
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
<html>
<head>
  <title>Infomartiekunde Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="overzicht.css" rel="stylesheet" />
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

<div class="opbouw">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="container1">
      <h3>Uw profiel</h3>
      <h5>Naam client</h5>
      <p>Tekst over de client geen idee precies wat hier moet maar ik denk dat dit uit de database moet worden gehaald, hier zal dan denk ik informatie komen over hoe de persoon is en hoever hij is in het proces. Maar nog een keer dit weet ik niet zeker en schrijf dit vooral uit zodat ik wel wat tekst opgevuld heb.</p>
      <h5>werkzaam bij</h5>
      <p>UIT DATABASE (plek van werken)</p>
      <h5>Functie</h5>
      <p>UIT DATABASE Coach</p>
      <h5>Telefoon</h5>
      <p>UIT DATABASE (telefoonnummer)</p>
      <h5>Email</h5>
      <p>UIT DATABASE (email)</p>
      <hr/>
      <button href="#' type="button"  class="btn-link" name="Uw gegevens">Uw gegevens</button>
      <button href="#' type="button"  class="btn-link" name="Instellingen">Instellingen</button>
      <button href="#' type="button" class="btn-link" name="Hulp nodig?">Hulp nodig?</button>
    </div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="container" id="container2">

        <h3>Activiteiten & Updates</h3>


      <div class="jumbotron">
        <form class="form-inline">
          <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Plaats je update...">
          <button type="submit" class="btn btn-primary my-1">Plaatsen</button>
          </form>
      </div>
            <div class="jumbotron">
            <p>
               <hr/>UIT DATABASE (hier de naam van de persoon met daaronder de ticket zelf)<hr/>
               UIT DATABASE (hier de naam van de persoon met daaronder de ticket zelf)<hr/>UIT DATABASE (hier de naam van de persoon met daaronder de ticket zelf)<hr/>
               UIT DATABASE (hier de naam van de persoon met daaronder de ticket zelf)<hr/>UIT DATABASE (hier de naam van de persoon met daaronder de ticket zelf)<hr/>
            <p>
            </div>

  </div>
</div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div class="container" id="container3">
       <p>tadaaa</p>
      </div>
</div>

    </div>
  </div>




</body>
</html>
