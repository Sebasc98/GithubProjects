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
  <link href="index.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <style>
      body {
          font-family: 'Open Sans';

      }
  </style>
  <link rel="icon" type="image/png" href="img/favicon.png"/>

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
</body>
</html>