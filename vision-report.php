<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Vision Report </h1>
	</div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/" alt="First slide">
</div>
<main class="container-fluid search-results secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul style="list-style: none;">
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="cfp-team.php">Team</a></li>
			<li><a href="cfp-reviewers.php">Our Reviewers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="press.php">Press</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="vision-report.php" class="current">Vision Report</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<div class="col-sm-12">
			<div class="row">
				<p>At the Catalogue for Philanthropy, we are agents for change, dedicated to the following goals. We will:</p>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-engage.php" class="thumbnail engage"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-create.php" class="thumbnail create"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-empower.php" class="thumbnail empower"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-expand.php" class="thumbnail expand"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-educate.php" class="thumbnail educate"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-convene.php" class="thumbnail convene"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-collaborate.php" class="thumbnail collaborate"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-inspire.php" class="thumbnail inspire"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="vision-transform.php" class="thumbnail transform"></a>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>