<!DOCTYPE html>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html><!-- xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agile Open Northwest</title>
<link rel="stylesheet" type="text/css" href="common.css" />
<link rel="stylesheet" type="text/css" href="smallscreen.css" media="all and (max-width: 639px)" />
<!--<link rel="stylesheet" type="text/css" href="tablet.css" media="all and (min-width: 640px)" />-->
<link rel="stylesheet" type="text/css" href="widescreen.css" media="all and (min-width: 800px)" />
<!--[if (lt IE 9) & (!IEMobile)]>
<link rel="stylesheet" type="text/css" href="widescreen.css" media="all" />
<![endif]-->
<style type="text/css" media="print">
#logo, #header, #nav, #navbar, .no-print {
  display: none;
}
#content {
  padding: 0;
}
body {
  font-size: 13px;
}
.logo-and-content {
  padding-left: 160px;
}

.logo-and-content .logo img {
  width: 150px;
  margin-left: -160px;
}

</style>
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

<div id="screen-size" style="position:absolute; right:20px;"></div>

<div id="page">

<div id="logo">
  <a href="index.php"><img src="images/logo.png" /></a>
</div>

<div id="header">
  <img src="images/header.png"/>
</div>

<div id="navbar">
  <a href="javascript:toggle_menu()" onmouseover="show_menu()">Menu...</a>
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

<div id="content">

