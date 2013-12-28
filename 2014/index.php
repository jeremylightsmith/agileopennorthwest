<?php include ( "header.php" ); ?>

<div id="right-hand-side">

<?php
include ("reg_panels.php");
if($wiki_status == 'offline') { ?>
<div class="side-panel">
  <p class="title">Wiki Unavailable</p>

  <p>The wiki is temporarily offline while we perform maintenance.</p>
</div>
<?php } ?>

<?php include("twitter_panel.php"); ?>

</div>

<style>
p.quote { font-family: Times New Roman,serif; font-style: italic; font-size: 16px }
p.tight { margin-bottom: 0 }
div.questions { margin: 0 2em; font-family: Times New Roman,serif;font-style: italic; font-size: 16px }
</style>

<p class="quote">"After I leave this conference, it feels like I'm starting a new life [with] ideas that make me say 'Wow, that's something I never thought of or considered but I'm excited to carry it with me.'"

<p class="quote">"[I liked] running out of business cards."

<p class="quote">"I was able to reconnect with the agile / Local community in a way that gives me so much positive energy!"

<h2><!-- <span style="text-transform:uppercase;"><?php echo $event_theme ?></span> --><br/>Agile Open Northwest <?php echo $event_year ?></h2>

<p>Agile Open Northwest, a non-profit alliance of agile practitioners in the US Pacific Northwest region, presents our eighth annual conference! 

<ul>
<li><b>What:</b> An <a href="openspace.php">Open Space</a> conference about agile practices and techniques.
<li><b>Where:</b> <a href="http://seattlecenter.com/locations/detail.aspx?id=27">Seattle Center Exhibition Hall</a>, Seattle, WA
<li><b>When:</b> <?php echo $event_dates ?> - Now three days long!
<li><b>Who:</b> YOU and other experienced, collaborative, committed agile practitioners. Registration is limited to <?php echo $event_limit ?> participants.
<li><b>Cost:</b> <?php echo $event_cost ?> for the three-day event, and includes <?php echo $whats_included ?>. 
</ul>

<p>Agile Open Northwest <?php echo $event_year?> offers an opportunity to strengthen our community of practice and co-create the future for agile development in our region. For three days, we build on conversation after conversation as we engage important questions like:

<div class="questions">
What is agile really?<br>
What are the most important practices in making agile approaches really successful on my team?<br>
Who practices agile philosophies, methods, principles or practices in the Northwest, and what's the impact?<br>
What is the difference between Lean, Scrum, XP, and other agile approaches?<br>
What new technical challenges face agile?<br>
What are the latest cutting edge developments in the agile software development world?<br>
How do agile frameworks and methods co-exist with project management, process control and other governance structures?<br>
How do we adapt agile practices to our organizations without diluting them?<br>
Can agile methods work in big, risky projects? How?<br>
When distributed teams use agile approaches, what changes?<br>
If we adopt an agile mindset, what might the transition look like in my organization?
</div>

<p>This conference contains <i>over 100 sessions</i> bringing novices, journeymen, and experts together for face-to-face conversations exploring the most important topics in agile software development today.

<p><b>How does it work?</b> Your hosts designed this event to allow practitioners like you to meet in self-organizing groups where we can share our latest ideas, challenges, hopes, experiences and experiments. We follow an Open Space format to foster collaboration and allow the conference to take its direction from the participants themselves. Your commitment to arriving at the beginning and staying until the end, all 3 days, will ensure that session after session will integrate, enhance, and deepen every participant’s understanding.</b> 

<?php if ($show_sponsors) { ?>

<hr style="margin: 30px 0">

<div class="prime-sponsors">
  <?php
  // dinner sponsor
  prime_sponsor("scrum-alliance");

  // $1500 sponsor
  prime_sponsor("plaster-group");

  // $1000 sponsor

  prime_sponsor("intel");
  prime_sponsor("pnsqc");
  prime_sponsor("outpace");
  prime_sponsor("rally");
  prime_sponsor("solutions-iq");
  prime_sponsor("version-one");

  ?>

<div style="margin: 1em 0; font-size: 0.8em; clear: left">
	<a href="sponsors.php">About Our Sponsors...</a>
</div>

<div style="margin: 1em 0; font-size: 0.8em; color: #339900">
	<a href="sponsorship.php">Become a Sponsor...</a>
</div>

<?php } ?>

<?php include ( "footer.php" ); ?>
