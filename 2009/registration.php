<?php
  include ( "header.php" );
?>

<!--<?php
  $count = 100;
  $file = fopen("participants.txt", "r");
  if($file && !feof($file)) {
    $hdr = fgets($file);
    while(!feof($file)){
	  $line = fgets($file);
      $tokens = explode('","', $line);
	  
	  if (count($tokens)>=4) {
	    $type = substr($tokens[3],0,1);
	    if ($type != 'H' && $type != 'S' && $type != 'V')
		  $count--;
	  }
	}
  }
?>-->

<div id="panel">
  <!-- <p id="title">Registration Open</p> -->
  <!--<p>Registration is limited to the first 100 people who sign up.</p>
  <form action="https://www.regonline.com" method="GET">
    <div class="link-button">
      <input type=submit value="Register Now!">
    </div>
	<input type="hidden" name="EventId" value="683053"/>
  </form>
<?php
  if ($count < 20) {
    echo "<p><b>Only $count places left!</b>";
  }
?>-->
  <p id="title">Registration Closed</p>
  <p>Agile Open Northwest 2009 has reached full capacity. We hope to see you at
   the next Agile Open Northwest event.</p>
</div>

<p id="title">Registration</p>
<p>Online registration for Agile Open Northwest 2009 is now open.</p>
<p>Space is limited to <strong>100 participants</strong>, so <strong>register early!</strong></p>
<p>Registration cost is $125 for the two days, including a light breakfast and box lunch on both days.</p>
<p>The <strong>Register Now!</strong> button takes you to our registration service.</p>

<?php
  include ( "footer.php" );
?>
