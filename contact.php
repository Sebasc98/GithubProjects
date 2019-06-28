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
          <li><a class="navbar-brand" href="#"><img src="img/logo3.png"></a></li>
          <li><a class="nav-link" href="index.html">Home</a></li>
          <li><a href="overons.html">Over ons</a></li>
          <li><a href="missie.html">Missie & Visie</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li>
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</li>
    </div>

</nav>


    <img src=img/contact.jpeg alt="contactimg" style="width:100%;">



<div id="home">
 <div class="Over ons">
    <div class="container" id="container1">
 
<h1>Contact  <img src="img/phone-call.png" alt="about-us" width="32" height="32" align="middle"> </h1>
	
  <div class="container">
  <form action="action_page.php">

    <label for="fname">Naam</label>
    <input type="text" id="fname" name="firstname" placeholder="Voor- en achternaam..">

    <label for="fname">E-mailadres</label>
    <input type="text" id="fname" name="firstname" placeholder="Geldige e-mail..">

    <label for="country">Vraag gaat over..</label>
    <select id="country" name="country">
      <option value="australia">ID-aanvraag</option>
      <option value="canada">Werk</option>
      <option value="usa">Woonsituatie</option>
    </select>
     <label for="country">Aan:</label>
    <select id="country" name="country">
      <option value="australia">Reclasseringsambtenaar</option>
      <option value="canada">Coach</option>
      <option type="text">overig</option>
    </select>

    <label for="subject">Vraag</label>
    <textarea id="subject" name="subject" placeholder="Schrijf hier.." style="height:200px"></textarea>

    <input type="submit" value="verstuur">

  </form>
</div>
</div>



</body>
