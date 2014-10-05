
<?php if ($page == "/") { ?>
  <div class="page-nav">
    <ul class="nav">
      <li><a class="slow" href="#about_us">About Us</a></li>
      <li><a class="slow" href="#about_open_space">About Open Space</a></li>
      <li><a class="slow" href="#faq">FAQ</a></li>
      <li><a class="slow" href="#contact_us">Contact Us</a></li>
    </ul>
  </div>
<?php } else { ?>
  <ul class="nav">
    <li><a href="/new.php#about_us">About Us</a></li>
    <li><a href="/new.php#about_open_space">About Open Space</a></li>
    <li><a href="/new.php#faq">FAQ</a></li>
    <li><a href="/new.php#contact_us">Contact Us</a></li>
  </ul>
<?php } ?>

<ul class="nav">
  <?php foreach (array("2015", "2014") as $year) { ?>
    <?php if ($year == $page) { ?>
      <li class="page-nav">
        <a href="<?php print $year ?>.php"><?php print $year ?> Conference</a>
        <ul class="nav">
          <li><a class="slow" href="#overview">Overview</a></li>
          <li><a class="slow" href="#schedule">Schedule</a></li>
          <li><a class="slow" href="#location">Location</a></li>
          <li><a class="slow" href="#sponsors">Sponsors</a></li>
          <li><a class="slow" href="#hosts">Hosts</a></li>
          <li><a class="slow" href="#attendees">Attendees</a></li>
        </ul>
      </li>
    <? } else { ?>
      <li><a href="<?php print $year ?>.php"><?php print $year ?> Conference</a></li>
    <? } ?>
  <? } ?>
  <li><a href="2013">2013 Conference</a></li>
  <li><a href="2012">2012 Conference</a></li>
  <li><a href="2011">2011 Conference</a></li>
  <li><a href="2010">2010 Conference</a></li>
  <li><a href="2009">2009 Conference</a></li>
  <li><a href="2008">2008 Conference</a></li>
  <li><a href="2007">2007 Conference</a></li>
</ul>
