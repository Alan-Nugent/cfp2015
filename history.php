<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Donation History</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="all-events.php">Events</a></li>
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href="javascript:void(0);" class="current">Donation History</a></li>
			<li><a href="favorites.php">View Favorites</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="giftcards.php">Gift Cards</a></li>
			<li><a href="mycatalogue.php">My Catalogue</a></li>
			<li><a href="kids.php">Especially for Kids</a></li>
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<p>Interested in tracking past donations made on this site? If you have a (free) account, you will be able to view three years&rsquo; worth of past donations here (and we&rsquo;ll archive the rest). Just login on the top right of this screen. If you don&rsquo;t have an account, consider signing up at the CREATE AN ACCOUNT link on the upper left side of this screen.</p>
		<p><a href="history_process.php" class="need-page">Already have a free donor account?  View your donation history here.</a></p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>