<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evostar 2016</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/evostar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

     <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Evo<span class="red">star</span> 2016</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about_evostar.php">About Evostar</a></li>
                <li><a href="about_organisers.php">Organisers</a></li>
                <li><a href="about_previousevents.php">Previous events</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Call for Papers<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cfp_eurogp.php">EuroGP</a></li>
                <li><a href="cfp_evocop.php">EvoCOP</a></li>
                <li><a href="cfp_evomusart.php">EvoMUSART</a></li>
                <li><a href="cfp_evoapps.php">EvoAPPS</a></li>
                <li class="divider"></li>
                <!--<li class="dropdown-header">Submission</li>
                <li><a href="#">Submission details</a></li>
                <li><a href="#">Camera-ready details</a></li>-->
              </ul>
            </li>
            <li class=""><a href="submission_details.php">Submit</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programme<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="programme_research_projects.php">Research Project Space</a></li>
                <li><a href="programme_speakers.php">Invited Speakers</a></li>
                <li><a href="programme_overview.php">Programme</a></li>
                <li><a href="programme_bestpapers.php">Best Paper Candidates</a></li>
                <li><a href="awards_outstanding.php">Award for Outstanding Contribution to EC</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Participants<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="participants_registration.php">Registration</a></li>
                <li><a href="participants_letter.php">Letter of invitation</a></li>
                <li><a href="participants_bursaries.php">Student bursaries</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Local Information<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="location_about_porto.php">About Porto</a></li>
                <li><a href="location_porto.php">Getting to Porto</a></li>
                <li><a href="location_venue.php">Getting to the venue</a></li>                
                <li><a href="location_accommodation.php">Accommodation</a></li>
                <li><a href="location_posters.php">Posters/WI-FI</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container theme-showcase" role="main">

       <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron jumboevo">
        <h1>Evo<span class="red">star</span> 2016</h1>
        <p>The Leading European Event on Bio-Inspired Computation.</p>
        <p>Porto, Portugal, 30 March - 1 April 2016</p>
      </div>

<div class="row">
    <div class="col-sm-3">
      <?php include('cfps.php') ?>
    </div>

    <div class="col-sm-6">
      <div class="page-header">
