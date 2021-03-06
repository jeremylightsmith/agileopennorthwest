<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agile Open Northwest</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<script src="jquery-2.0.3.min.js"></script>

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

<body>
<div id="page">
<div id="logo"><a href="index.php"><img src="images/agilenwlogo_2013.png" name="stdimage" id="stdimage" /></a>
  <div id="nav">
    <ul>
<?php
      menu_item("Home", "index.php");
      menu_item("Registration", "registration.php", $event_status == 'open');
      menu_item("Open&nbsp;Space", "openspace.php");
      menu_item("Schedule", "schedule.php");
      menu_item("Session&nbsp;Notes", "http://aonw2013.posterous.com", $wiki_status == 'online');
      menu_item("Session&nbsp;Graphics", "graphics.php");
      menu_item("Location", "location.php");
      menu_item("Sponsors", $show_sponsors ? "sponsors.php" : "sponsorship.php");
      menu_item("Your&nbsp;Hosts", "hosts.php");
      menu_item("Participants", "participants.php", $show_participants);
      menu_item("Agile&nbsp;Groups", "groups.php");
      menu_item("FAQ", "faq.php");
      menu_item("About&nbsp;This&nbsp;Site", "about.php");
      menu_item("Contact", "contact.php");
?>

      <br><br>

      <li><a>Past Events:</a>
      <ul>
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
<table id="bgtable" cellspacing="0" cellpadding="0">
<tr>
  <td id="bgtabletopleft">&nbsp;</td>
  <td id="bgtabletop">&nbsp;</td>
  <td id="bgtabletopright">&nbsp;</td>
</tr>
<tr>
  <td id="bgtableleft">&nbsp;</td>
  <td id="content">
