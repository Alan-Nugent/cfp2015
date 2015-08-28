<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Gift Registry</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="all-events.php">Events</a></li>
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href=""></a></li>
			<li><a href="history.php">Donation History</a></li>
			<li><a href="favorites.php">View Favorites</a></li>
			<li><a href="javascript:void(0);" class="current">Gift Registry</a></li>
			<li><a href="giftcards.php">Gift Cards</a></li>
			<li><a href="mycatalogue.php">My Catalogue</a></li>
			<li><a href="kids.php">Especially for Kids</a></li>
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-8">
		<p>Creating a gift registry, and sharing it with family, friends, and colleagues is a great way to celebrate an important event and invite others to donate to your favorite causes. Holidays, birthdays, anniversaries, weddings, graduations&mdash;the choice is yours. In order to create a Gift Registry, you must first sign up (it&rsquo;s free). Just click Create An Account on the left side of the screen, and get started.</p>
		<p>If you haven&rsquo;t made any selections, browse Our Nonprofits and click the &ldquo;add to favorites&rdquo; link. When you&rsquo;re ready, go to View Favorites, check the nonprofits that interest you, and click Add to Gift Registry.</p>
		<p>To set up your registry, or view an existing registry, click the link below.</p>
		<p><a href="registry_process.php" class="needs-page" title="Visit the Create/View Gift Registry page">Create/View Gift Registry</a></p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>