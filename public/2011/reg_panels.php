<div class="side-panel">

<?php if ( $event_status == 'coming' ) { ?>

  <p id="title">Watch This Page!</p>
  <p>Registration for Agile Open Northwest <?php echo $event_year; ?> will be opening soon.</p>

<?php } elseif ( $event_status == 'open' ) { ?>

  <p id="title">Registration Open</p>
  <p>Registration is limited to the first <?php echo $event_limit; ?> people who sign up.</p>
  <form action="https://www.regonline.com" method="GET">
    <div class="link-button">
      <input type=submit value="Register Now!">
    </div>
	<input type="hidden" name="EventId" value="<?php echo $event_id; ?>"/>
  </form>
<?php
  if ($places_remaining == 1) {
    echo "<p><b>Only $places_remaining place left!</b>";
  }
  else if ($places_remaining < 20) {
    echo "<p><b>Only $places_remaining places left!</b>";
  }
?>

<?php } elseif ( $event_status == 'full' ) { ?>

  <p id="title">Registration Closed</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> has reached full capacity. We hope to see you at
   the next Agile Open Northwest event.</p>
   
<?php } elseif ( $event_status == 'past' ) { ?>

  <p id="title">Conference Complete!</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> was a success. You can read session notes <a href="wiki/index.php?title=Session_Notes">here</a>. We hope to see you at
   the next Agile Open Northwest event.</p>

<?php } ?>

</div>

<br/>
<br/>

<?php if ( $event_status == 'full' && $allow_sponsor_registration) { ?>

<div class="side-panel">

  <p id="title">Sponsors and Volunteers</p>

  <p>You may still <a href="http://www.regonline.com/Checkin.asp?EventId=<?php echo $event_id; ?>">register here</a>
  using the code you were given.</p>
  
</div>

<?php } ?>

