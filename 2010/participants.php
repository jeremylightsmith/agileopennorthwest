<?php
  include ( "header.php" );
?>
  
<p id="title">Participants</p>

<p>Here's a list of folks who are planning to attend.</p>

<!-- Table Entries
Normal Participant:
<tr><td>&nbsp;</td><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
Sponsors:
<tr><th><a href="sponsors.php">S</a></th><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
Hosts:
<tr><th><a href="hosts.php">H</a></th><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
-->

<table class="participants" cellspacing=0 cellpadding=5 border=1>
<?php

  $file = fopen("participants.txt", "r");
  if($file && !feof($file)) {
    $hdr = fgets($file);
    while(!feof($file)){
	  $line = fgets($file);
      $tokens = explode('","', $line);
	  
	  if (count($tokens)>=4) {
	    $type = substr($tokens[3],0,1);
	    $name = substr($tokens[0],1); // lose initial quote
	    $company = $tokens[1];
		if ($company == '') $company = '&nbsp;';
	    $citystate = ucfirst($tokens[2]);
	  
        echo "<tr>";
	    if ($type == 'H')
	  	  echo "<th><a href=\"hosts.php\">$type</a></th>";
	    elseif ($type == 'S')
	  	  echo "<th><a href=\"sponsors.php\">$type</a></th>";
		elseif ($type == 'V')
		  echo "<th style=\"color: #339900\"><i>$type</i></th>";
	    else
	  	  echo "<td>&nbsp;</td>";
	    echo "<td>$name</td>";
	    echo "<td>$company</td>";
	    echo "<td>$citystate</td>";
	    echo "</tr>\n";
	  }
	}
  }
?>
</table>

<p style="margin-left: 3.5em"><i>H</i> = Host, <i>S</i> = Sponsor, <i>V</i> = Volunteer

<?php include( "footer.php" ) ?>
