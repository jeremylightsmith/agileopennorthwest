<?php
  include ( "header.php" );
?>

<div id="right-hand-side">

<?php
  include ("reg_panels.php");

  if($wiki_status == 'offline') { ?>

<div class="side-panel">

  <p id="title">Wiki Unavailable</p>

  <p>The wiki is temporarily offline while we perform maintenance.</p>

</div>

<?php }

  include("twitter_panel.php");
?>

</div>

<style>
p.quote { font-family: Times New Roman,serif; font-style: italic; font-size: 16px }
p.tight { margin-bottom: 0 }
div.questions { margin: 0 2em; font-family: Times New Roman,serif;font-style: italic; font-size: 16px }
</style>

<p class="quote">"After I leave this conference, it feels like I'm starting a new life [with] ideas that make me say 'Wow, that's something I never thought of or considered but I'm excited to carry it with me.'"

<p class="quote">"[I liked] running out of business cards."

<p class="quote">"I was able to reconnect with the Agile / Local community in a way that gives me so much positive energy!"

<h2>AGILE FOR REAL – Agile Open Northwest 2011</h2>

<p>Agile Open Northwest, a non-profit alliance of agile practitioners in the US Pacific Northwest region, presents our fifth annual conference: 

<p><b>What is it?</b> An Open Space conference about Agile practices and techniques.<br>
<b>Where?</b> Ambridge Event Center, Portland, Oregon<br>
<b>When?</b> February 8 and 9, 2011 (Mark your calendar!)

<p><b>Who attends?</b> YOU and other experienced, collaborative, committed agile practitioners with years of real-world Agile experience from the Northwest U.S. (and beyond). Registration opens soon.

<p class="tight"><b>Why?</b> Agile Open Northwest 2011 offers an opportunity to strengthen our community of practice and co-create the future for Agile development in our region. For two full days, we build on conversation after conversation as we engage important questions like:

<div class="questions">
What is Agile really?<br>
What are the most important practices in making Agile approaches really successful on my team?<br>
Who practices Agile philosophies, methods, principles or practices in the Northwest, and what's the impact?<br>
What is the difference between Lean, Scrum, XP, and other Agile approaches?<br>
What new technical challenges face Agile?<br>
What are the latest cutting edge developments in the Agile software development world?<br>
How do Agile frameworks and methods co-exist with project management, process control and other governance structures?<br>
How do we adapt Agile practices to our organizations without diluting them?<br>
Can Agile methods work in big, risky projects? How?<br>
When distributed teams use Agile approaches, what changes?<br>
If we adopt an Agile mindset, what might the transition look like in my organization?
</div>

<p>This two-day conference contains <i>over 60 sessions</i> bringing novices, journeymen, and experts together for face-to-face conversations exploring the most important topics in Agile software development today.

<p><b>How does it work?</b> Your hosts designed this event to allow practitioners like you to meet in self-organizing groups where we can share our latest ideas, challenges, hopes, experiences and experiments. We follow an Open Space format to foster collaboration and allow the conference to take its direction from the participants themselves. Your commitment to arriving at the beginning and staying until the end both days will ensure that session after session will integrate, enhance, and deepen every participant’s understanding of achieving <b>“Agile for Real.”</b> 

<p class="quote">“I have attended software conferences for 30 years.  These two-day Agile Open Northwest events are simply the best.  At AONW leading Agile practitioners tackle meaningful topics, share useful information, and challenge you to grow.  Participating in AONW will change the way you develop software.” <span style="font-style: normal">Ian Savage, SAO board member, McAfee tester, Tech Alliance founder.</span>

<?php if ($show_sponsors) { ?>

<hr style="margin: 30px 0">

<div id="prime-sponsors">
	
	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/SolutionsIQ.png"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/Vertafore.GIF"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/AgileAlliance.jpg"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/AgileEVM.png"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/AgileLearningLabs.jpg"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/BigVisibleSolutions.jpg"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/IntegrumLogo.jpg"></a>
	</div>

	<div class="sponsor">
   		<a href="sponsors.php"><img src="images/PNSQC2011Logo.jpg"></a>
	</div>

</div>

<div style="margin: 1em 0; font-size: 0.8em; clear: left">
	<a href="sponsors.php">About Our Sponsors...</a>
</div>

<div style="margin: 1em 0; font-size: 0.8em; color: #339900">
	<a href="sponsorship.php">Become a Sponsor...</a>
</div>

<?php
  }

  include ( "footer.php" );
?>
