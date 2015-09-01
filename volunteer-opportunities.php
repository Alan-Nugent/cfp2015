<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Volunteer Opportunities</h1>
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
			<li><a href="history.php">Donation History</a></li>
			<li><a href="favorites.php">View Favorites</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="giftcards.php">Gift Cards</a></li>
			<li><a href="mycatalogue.php">My Catalogue</a></li>
			<li><a href="kids.php">Especially for Kids</a></li>
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
			<li><a href="javascript:void(0);" class="current">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<p class="lead">Catalogue nonprofits are recruiting volunteers to help them run, organize, or participate in the following events. Identify an organization that interests you, and then call or email the contact person to find out what you can do to help out or join in. Click &ldquo;more event info&rdquo; to see the entire entry, including event details. Click the event name, and then &ldquo;share&rdquo; to let others know!</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>