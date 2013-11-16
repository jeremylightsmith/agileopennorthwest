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
  <p>Agile Open Northwest <?php echo $event_year; ?> was a success. You can read session notes 
    <a href="http://aonw2013.posterous.com">here</a>. We hope to see you at
    the next Agile Open Northwest event.</p>

  <p id="title">Signup as an AONW Friend</p>
  <p>Be the first to hear about next year's conference!</p>

  <script type="text/javascript">
  $(function() {
    $("button.let-me-know").click(function() {
      $(this).hide().next().show();
      return false;
    })
  })
  </script>
  <button class="let-me-know">Signup for 2014 news!</button>

  <form class="let-me-know" style="display:none; text-align: left;" method="post" action="http://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup3663" accept-charset="UTF-8" onsubmit="return verifyRequired3663();">
    <input type="hidden" name="redirect" value="http://www.icontact.com/www/signup/thanks.html">
    <input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">

    <p><span class="required">*</span>Email<br/><input type="text" name="fields_email"></p>
    <p><span class="required">*</span>First Name<br/><input type="text" name="fields_fname"></p>
    <p><span class="required">*</span>Last Name<br/><input type="text" name="fields_lname"></p>
    <p>Business<br/><input type="text" name="fields_business"></p>
    <p>City<br/><input type="text" name="fields_city"></p>
    <input type="hidden" name="listid" value="44965">
    <input type="hidden" name="specialid:44965" value="MWJL">

    <input type="hidden" name="clientid" value="218221">
    <input type="hidden" name="formid" value="3663">
    <input type="hidden" name="reallistid" value="1">
    <input type="hidden" name="doubleopt" value="0">

    <p><span class="required">*</span> = Required Field</p>

    <p><input type="submit" name="Submit" value="Submit"></p>
  </form>

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

