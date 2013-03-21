<?php
  $display_twitter_widgets = FALSE;
  $display_sponsor_registration = TRUE;

  include ( "header.php" );
  include ( "reg_panels.php");
?>

<p id="title">Registration</p>

<p>Online registration for Agile Open Northwest <?php echo $event_year; ?> will be opening soon.</p>

<p>Space is limited to <strong><?php echo $max_people; ?> participants</strong>, so <strong>register early!</strong></p>

<p>Registration cost is $125 for the two days, including a light breakfast and box lunch on both days.</p>

<p>A refund of your registration fee less a $50 cancellation fee will be made for 
cancellation requests received before January 25, 2010. No refunds are issued 
after January 25, 2010. Another option if you are unable to attend is to substitute 
someone else in your place.</p>

<p>The <strong>Register Now!</strong> button takes you to our registration service.</p>

<p>If you attended Agile Open Northwest 2009, or have used the Regonline system 
to register for other events, the system remembers your email and password and 
asks you to enter them before proceeding with registration.</p>

<p>If you are a first time attendee, you will be asked to enter your email address 
and a password to create a user profile in the registration system.</p>

<p>We use registration information to send you conference notice emails. Remember 
your user email and password in case you want to change your registration 
information or transfer your registration to someone else.</p>


<?php
  include ( "footer.php" );
?>
