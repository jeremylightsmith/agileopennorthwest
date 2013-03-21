<?php
  $count = $max_people;
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
?>

<div id="reg-and-twitter-panels">
<div id="reg-panel">

<?php if ( $event_status == 'coming' ) { ?>

  <p id="title">Watch This Page!</p>
  <p>Registration for Agile Open Northwest <?php echo $event_year; ?> will be opening soon.</p>

<?php } elseif ( $event_status == 'open' ) { ?>

  <p id="title">Registration Open</p>
  <p>Registration is limited to the first <?php echo $max_people; ?> people who sign up.</p>
  <form action="https://www.regonline.com" method="GET">
    <div class="link-button">
      <input type=submit value="Register Now!">
    </div>
	<input type="hidden" name="EventId" value="792432"/>
  </form>
<?php
  if ($count < 20) {
    echo "<p><b>Only $count places left!</b>";
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

<?php if ( $event_status == 'full' && $display_sponsor_registration) { ?>

<div id="reg-panel">

  <p id="title">Sponsors and Volunteers</p>

  <p>You may still <a href="http://www.regonline.com/Checkin.asp?EventId=792432">register here</a>
  using the code you were given.</p>
  
</div>

<?php } ?>

<?php if($wiki_status == 'offline') { ?>

<div id="reg-panel">

  <p id="title">Wiki Unavailable</p>

  <p>The wiki is temporarily offline while we perform maintenance.</p>

</div>

<?php } ?>

<br/>
<br/>

<?php if ( $display_twitter_widgets ) { ?>

<div id="twitter-panel">

<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#aonw',
  interval: 6000,
  title: 'Agile Open Northwest 2010',
  subject: 'AONW on Twitter...',
  width: 250,
  height: 180,
  theme: {
    shell: {
      background: '#033333',
      color: '#ffffff'
    },
    tweets: {
      background: '#999999',
      color: '#000000',
      links: '#1707eb'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>

<a href="http://twitter.com/aonw"><img src="images/twitterbutton-0208.png" title="By: TwitterButtons.com" width="120" height="90" /></a><br /><a href="http://www.twitterbuttons.com">By TwitterButtons.com</a>

</div>

<?php } ?>

</div>
