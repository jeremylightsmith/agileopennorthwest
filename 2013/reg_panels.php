<div class="side-panel">

<?php if ( $event_status == 'coming' ) {

  if ( isset($event_open_time)) {
    $open_when = 'on ' . date('F j, Y', $event_open_time) . ' at ' . date('h:ia', $event_open_time) . ' PST';
  } else {
    $open_when = 'soon';
  } ?>
  
  <p id="title">Watch This Page!</p>
  <p>Registration for Agile Open Northwest <?php echo $event_year; ?> will open <?php echo $open_when; ?>.</p>
  <p>Follow us on Twitter for updates.</p>

<?php } elseif ( $event_status == 'open' ) { ?>

  <p id="title">Registration Open</p>
  <p>Registration is limited to the first <?php echo $event_limit; ?> people who sign up.</p>
  <form action="http://aonw2013.eventbrite.com" method="GET">
    <div class="link-button">
      <input type=submit value="Register Now!">
    </div>
  </form>

<?php } elseif ( $event_status == 'full' ) { ?>

  <p id="title">We're Full!</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> has reached full capacity but you can still add your name to the wait list.</p>
  <form action="http://aonw2013.eventbrite.com" method="GET">
    <div class="link-button">
      <input type=submit value="Join Waitlist!">
    </div>
  </form>
   
<?php } elseif ( $event_status == 'past' ) { ?>

  <p id="title">Conference Complete!</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> was a success. You can read session notes <a href="http://aonw2013.posterous.com">here</a>. We hope to see you at
   the next Agile Open Northwest event.</p>

<?php } ?>

</div>

<br/>
<br/>

<?php if ( $event_status == 'full' ) { ?>

<div class="side-panel">

  <p id="title">Sponsors and Volunteers</p>

  <p>You may still <a href="http://aonw2013.eventbrite.com">register here</a>
  using the code you were given.</p>
  
</div>

<?php } ?>

