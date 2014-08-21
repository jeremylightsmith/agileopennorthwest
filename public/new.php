<?php $class = "organization-page" ?>
<?php $page = "/" ?>
<?php include('_header.php');?>

<h1 id="about_us">Agile Open Northwest <small>is your conference.</small></h1>

<div class="banner homepage-banner">
	<img src="images/circle.jpg" class="background"/>
	<div class="darken"></div>
	<div class="words">
		<div class="attention">NEXT EVENT <i>Make it yours!</i></div>
		<div class="location">Portland</div>
		<div class="date">February 5-7, 2015</div>
		<div>
			<a href="eventbrite.com" class="btn btn-primary">Register Today</a>
			<a href="/2015.php">View Conference Details >></a>
		</div>
	</div>
	<div class="attribution">&copy; 2014 STEVEN SMITH</div>
</div>



<?php perch_content("About Us") ?>

<div class="faces-5">
	<img src="/images/faces/a.jpg" alt="" class="face" />
	<img src="/images/faces/b.jpg" alt="" class="face" />
	<img src="/images/faces/c.jpg" alt="" class="face" />
	<img src="/images/faces/d.jpg" alt="" class="face" />
	<img src="/images/faces/e.jpg" alt="" class="face" />
</div>


<hr/>
<h2 id="about_open_space">About Open Space</h2>

<?php perch_content("About Open Space") ?>


<hr/>
<h2 id="faq">FAQ</h2>

<?php perch_content("Questions") ?>


<hr/>
<h2 id="contact_us">Contact Us</h2>

<?php perch_content("Contact Us") ?>


<?php include('_footer.php');?>
