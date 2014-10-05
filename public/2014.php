<?php $class = "event-page" ?>
<?php $page = "2014" ?>
<?php $notes_url = "http://aonw2014.blogspot.com/" ?>
<?php include('_header.php');?>
    
<div class="attention">JOIN US FOR</div>

<h1>Agile Open Northwest</h1>
<div class="lead">Portland, OR - February 5-7, 2014</div>

<div id="overview" class="banner cta-banner">
  <img src="images/circle.jpg" class="background"/>
  <div class="darken"></div>
  <div class="words">
    <div class="attention">AGILE OPEN NORTHWEST 2014</div>
    <div class="big-message">From nothing...fabulousness</div>
  </div>
  <a href="#" class="btn">Register Today!</a>
</div>

<p class="lead">Agile Open Northwest, a non-profit alliance of agile practitioners in the US Pacific Northwest region, presents our eighth annual <a href="/">Open Space</a> conference about agile practices and techniques!</p>

<h2>Overview</h2>

<?php perch_content("Overview") ?>


<hr class="section"/>
<h2 id="schedule">Conference Schedule</h2>

<h3><?php perch_content("Day 1") ?></h3>

<?php perch_content("Day 1 Schedule") ?>

<h3><?php perch_content("Day 2") ?></h3>

<?php perch_content("Day 2 Schedule") ?>

<h3><?php perch_content("Day 3") ?></h3>

<?php perch_content("Day 3 Schedule") ?>


<hr class="section"/>
<h2 id="location">Location &amp; Map</h2>

<?php perch_content("Location") ?>

<?php perch_content("Map") ?>


<hr class="section"/>

<?php include('_sponsors.php'); ?>


<h2 id="hosts">Hosts</h2>

<?php perch_content("Hosts") ?>
<?php perch_content("Event Hosts") ?>


<hr class="section"/>
<h2 id="attendees">Attendees</h2>

<?php include("_attendees.php") ?>


<?php include('_footer.php');?>
