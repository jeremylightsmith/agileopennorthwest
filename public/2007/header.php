<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
  <title><?php echo $CurrentPageTitle; ?></title>
  <meta name="description" content="Agile Open Northwest is an all Open Space conference for agile software developers">
  <meta name="keywords" content="agile,open,portland,seattle,northwest">
  <link rel="stylesheet" type="text/css" href="aonw.css">
  <link rel="shortcut icon" href="aonw.ico">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">

<div id="content">

   <div style="position: absolute; left: 11%; top: 2em; padding: 1em; background: #E0E0A0; border: 1px solid black; width: 220px" >
      <img src="AO_logo_gray.gif">
   </div>

<div id="header">
	 <h1>Agile Open Northwest</h1>
	 <h2><i>"Agile for Real"</i></h2>
</div>

<div id="separator">
	 Portland, Oregon - January 30-31, 2007
</div>

<?php
function navLink( $page, $text )
{
  global $CurrentPageName;
  
  if ( $page == $CurrentPageName )
    return "<li class=\"current\">$text";
	
  return "<li><a href=\"$page.php\">$text</a>";
}

function noLink( $page, $text )
{
  return "<li class=\"current\">$text";
}
?>

<div id="left-column">

   <div id="nav">
	 <ul>
	 	 <?php echo navLink( "index", "Home" ) ?>
		 <?php echo noLink( "registration", "Registration" ) ?>
		 <?php echo navLink( "openspace", "Open&nbsp;Space" ) ?>
		 <?php echo navLink( "schedule", "Schedule" ) ?>
		 <?php echo navLink( "picnic", "Co-evolution Picnic" ) ?>
		 <?php echo navLink( "location", "Location" ) ?>
		 <?php echo navLink( "sponsors", "Sponsors" ) ?>
		 <?php echo navLink( "hosts", "Your&nbsp;Hosts" ) ?>
		 <?php echo navLink( "participants", "Participants" ) ?>
<!--		 <?php echo noLink( "topics", "Session&nbsp;Topics" ) ?> -->
		 <li><a href="wiki/wiki.pl">Session&nbsp;Notes</a>
		 <?php echo navLink( "faq", "FAQ" ) ?>
		 <?php echo navLink( "site", "About&nbsp;This&nbsp;Site" ) ?>
		 <?php echo navLink( "contact", "Contact" ) ?>
	 </ul>
   </div>
   
<?php if ( $CurrentPageName == "index" ) { ?>
   <div id="prime-sponsors">
   		<hr>
		
   		<div class="sponsor">
   			 <a href="sponsors.php"><img src="AgileAlliance.jpg"></a>
		</div>
   
   		<div class="sponsor">
	    	 <a href="sponsors.php"><img src="infoq-small.gif"></a>
   		</div>
   
   		<div class="sponsor" style="margin-left: -2em">
	    	 <a href="sponsors.php"><img src="SolutionsIQ.png"><a>
   		</div>
		
   		<div class="sponsor" style="margin-left: -1em">
	    	 <a href="sponsors.php#gold"><img src="CorrillianLogo.gif"></a>
   		</div>
   
   		<div class="sponsor" style="margin-left: -2em">
	    	 <a href="sponsors.php#gold"><img src="InstantiationsLogo.png"></a>
   		</div>
   
		<div class="sponsor" style="margin-left: -2em">
		     <a href="sponsors.php#gold"><img src="NetObjectives.jpg"></a>
		</div>
   
   		<div class="sponsor" style="margin-left: -1em">
	    	 <a href="sponsors.php#gold"><img src="PNSQCLogo.jpg"></a>
   		</div>
   
  		<div style="margin: 1em 0; text-weight: bold; font-size: 0.8em">
			 <a href="sponsors.php">More Sponsors...</a>
   		</div>
   
   		<div style="margin: 1em 0; text-weight: bold; font-size: 0.8em">
        	 <a href="sponsorship.php">Become a Sponsor...</a>
   		</div>
   </div>
<?php } ?>
</div>
