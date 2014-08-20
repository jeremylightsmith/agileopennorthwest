<div class="side-panel">

<?php if ( $event_status == 'coming' ) { ?>
  
  <p class="title">Watch This Page!</p>
  <p>Registration for Agile Open Northwest <?php echo $event_year; ?> will open <?php echo $event_registration_start_time ?>.</p>
  <p>Follow us on Twitter for updates.</p>

<?php } elseif ( $event_status == 'open' ) { ?>

  <p class="title">Registration Open</p>
  <p>Registration is limited to the first <?php echo $event_limit; ?> people who sign up.</p>
  <form action="<?php echo $registration_url; ?>" method="GET">
    <div class="link-button">
      <input type=submit value="Register Now!">
    </div>
  </form>

<?php } elseif ( $event_status == 'full' ) { ?>

  <p class="title">We're Full!</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> has reached full capacity.

<!--     but you can still add your name to the wait list.</p>
  <form action="<?php echo $registration_url; ?>" method="GET">
    <div class="link-button">
      <input type=submit value="Join Waitlist!">
    </div>
  </form>
 -->
  <?php include ("friend_of_aonw.php"); ?>

   
<?php } elseif ( $event_status == 'past' ) { ?>

  <p class="title">Conference Complete!</p>
  <p>Agile Open Northwest <?php echo $event_year; ?> was a success. You can read session notes <a href="<?php echo $session_notes_url; ?>">here</a>. We hope to see you at
   the next Agile Open Northwest event.</p>

<?php } ?>

</div>

<br/>
<br/>

<?php if ( $event_status == 'full' ) { ?>

<div class="side-panel">

  <p class="title">Sponsors and Volunteers</p>

  <p>You may still <a href="<?php echo $registration_url; ?>">register here</a>
  using the code you were given.</p>
  
</div>

<?php } ?>

