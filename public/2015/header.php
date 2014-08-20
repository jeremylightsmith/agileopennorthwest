<?php include('../perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Agile Open Northwest</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/common.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<?php
  include("event_info.php");

  function menu_item($name, $link, $enabled=true)
  {
    if ($enabled)
      echo "<li><a href=\"$link\">$name</a>";
    else
      echo "<li><a href=\"\" style=\"color: #c0c0c0\">$name</a>";
  }
?>

<script type="text/javascript"/>
  function show_menu()
  {
    document.getElementById('nav').style.display="block";
  }

  function toggle_menu()
  {
    var nav_element = document.getElementById('nav');
    if (nav_element.style.display == 'block')
      nav_element.style.display = 'none';
    else
      nav_element.style.display = 'block';
  }
</script>

<body>
<div class="container">
  <div class="row">
    <div class="sidebar col-sm-3">
      <div id="logo">
        <a href="index.php"><img src="images/logo.png" /></a>
      </div>

      <div id="nav">
        <div id="page-menu">
          <br/>
          <ul>
      <?php
            menu_item("Home", "index.php");
            menu_item("Registration", "registration.php", $event_status == 'open');
            menu_item("Open&nbsp;Space", "openspace.php");
            menu_item("Schedule", "schedule.php");
            menu_item("Session&nbsp;Notes", $session_notes_url, $wiki_status == 'online');
            menu_item("Session&nbsp;Graphics", "graphics.php", $show_session_graphics);
            menu_item("Location", "location.php");
            menu_item("Sponsors", $show_sponsors ? "sponsors.php" : "sponsorship.php");
            menu_item("Your&nbsp;Hosts", "hosts.php");
            menu_item("Participants", "participants.php", $show_participants);
            menu_item("Agile&nbsp;Groups", "groups.php");
            menu_item("FAQ", "faq.php");
            menu_item("About&nbsp;This&nbsp;Site", "about.php");
            menu_item("Contact", "contact.php");
      ?>
          </ul>
        </div>
        <div id="year-menu">
        <ul>
          <li><a>Past Events:</a>
          <ul>
            <li><a href="../2014/index.php">2014</a>
            <li><a href="../2013/index.php">2013</a>
            <li><a href="../2012/index.php">2012</a>
            <li><a href="../2011/index.php">2011</a>
            <li><a href="../2010/index.php">2010</a>
            <li><a href="../2009/index.php">2009</a>
            <li><a href="../2008/index.php">2008</a>
            <li><a href="../2007/index.php">2007</a>
          </ul>
        </ul>
        </div>
      </div>
    </div>

    <div class="col-sm-9">
      <div id="header">
        <img src="images/header.png"/>
      </div>

      <div id="content">

