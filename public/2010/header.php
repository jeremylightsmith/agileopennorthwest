<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agile Open Northwest</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />

<script src="http://widgets.twimg.com/j/2/widget.js"></script>

</head>

<?php
  /* Set the event year */
  $event_year = 2010;
  
  /* Set the maximum number of paying attendees */
  $max_people = 135;
  
  /* Set the status of the event here in order to control which
     of the four registration panels is displayed. Options are
	   coming = registration not yet open
	   open   = you may now register
	   full   = we are at capacity - registration closed
	   past   = the event has already taken place */
  $event_status = 'full';

  /* Set the status of the wiki. Options are
         offline = The wiki is unavailble
         online  = The wiki is available
     Any other value is also treated as online */
  $wiki_status = 'online';
?>

<body>
<div id="page">
<div id="logo"><a href="index.php"><img src="images/agilenwlogo_2010.png" name="stdimage" id="stdimage" /></a>
  <div id="nav">
    <ul>
	  <li><a href="index.php">Home</a>
<?php if ($event_status == 'open' ) { ?>
	  <li><a href="registration.php">Registration</a>
<?php } else { ?>
        <li><a href="" style="color: #c0c0c0">Registration</a>
<?php } ?>
	  <li><a href="openspace.php">Open&nbsp;Space</a>
	  <li><a href="schedule.php">Schedule</a>
<?php if ($wiki_status == 'offline') { ?>
        <li><a href="" style="color: #c0c0c0">Session Notes</a>
<?php } else { ?>
<!--	  <li><a href="../wiki/index.php">Wiki</a> -->
	  <li><a href="../wiki/index.php?title=Agile_Open_Northwest_2010_Session_Notes">Session Notes</a>
<?php } ?>
	  <li><a href="location.php">Location</a>
	  <li><a href="sponsors.php">Sponsors</a>
	  <li><a href="hosts.php">Your&nbsp;Hosts</a>
	  <li><a href="participants.php">Participants</a>
	  <li><a href="groups.php">Agile Groups</a>
	  <li><a href="faq.php">FAQ</a>
	  <li><a href="about.php">About&nbsp;This&nbsp;Site</a>
	  <li><a href="contact.php">Contact</a><br><br>
	  <li><a>Past Events:</a>
	  <ul>
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
