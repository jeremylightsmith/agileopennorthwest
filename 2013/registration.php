<?php
  include ( "header.php" );
?>

<div id="right-hand-side">

<?php
  include ("reg_panels.php");
?>

</div>

<p id="title">Registration</p>

<p>Online registration for Agile Open Northwest <?php echo $event_year; ?> opens at noontime Pacific Time on 12 December 2012.</p>

<p>Registration is limited to <strong><?php echo $event_limit; ?> participants</strong>, so <strong>register early!</strong> Last year all available spots were sold in a few days.</p>

<p>Registration cost is <?php echo $event_cost; ?> and includes a continental breakfast and lunch each day.</p>

<p>A refund of your registration fee less a $50 cancellation fee will be made for 
cancellation requests received before January 24, 2012. No refunds are issued 
after January 28, 2013. Another option if you are unable to attend is to substitute 
someone else in your place.</p>

<p>The <strong>Register Now!</strong> button takes you to our registration service.</p>

<p>We use registration information to send you conference notice emails. Remember 
your user email and password in case you want to change your registration 
information or transfer your registration to someone else.</p>


<?php
  include ( "footer.php" );
?>
