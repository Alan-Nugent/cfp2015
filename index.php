<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<h1 class="sr-only">Catalogue for Philanthropy: Greater Washington Area Home page</h1>
<div id="myCarousel" class="carousel slide clearfix hero" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="">
    </li>
    <li data-target="#myCarousel" data-slide-to="1" class="active">
    </li>
    <li data-target="#myCarousel" data-slide-to="2" class="">
    </li>
  </ol>
  <div class="carouselButtons">
    <button id="pauseButton" type="button" class="btn btn-link btn-xs">
    <span class="fa fa-pause fa-2x">
    <span class="adobeBlank" aria-hidden="true">Pause icon</span>
    <span class="sr-only">
    Pause the carousel
    </span>
    </span>
    </button>
    <button id="playButton" type="button" class="btn btn-link btn-xs hide">
    <span class="fa fa-play-circle fa-2x">
    <span class="adobeBlank" aria-hidden="true">Play Icon</span>
    <span class="sr-only">
    Play the carousel
    </span>
    </span>
    </button>
  </div>
  <a  role="button" class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left">
    <span class="adobeBlank" aria-hidden="true">&lt;</span>
    <span class="sr-only">Select to view previous slide</span>
    </span>
  </a>
  <div class="carousel-inner">
    <div class="item">
      <img src="http://lorempixel.com/1200/500/animals" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <h2 class="h1">Slide 1</h2>
          <p>
          Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
          </p>
        </div>
      </div>
    </div>
    <div class="item active">
      <img src="http://lorempixel.com/1200/500/nature" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <h2 class="h1">Slide 2</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
          </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1200/500/abstract" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <h2 class="h1">Slide 3</h2>
          <p>
          Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <a role="button" class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right">
    <span class="adobeBlank" aria-hidden="true">&gt;</span>
    <span class="sr-only">Select to view next slide</span>
    </span>
  </a>
</div>
<main role="main" class="container-fluid">
<div class="row">
  <p class="lead text-center home-lead-text col-sm-8 col-sm-offset-2">
  Donec metus ex, maximus vel dolor vel, pellentesque dictum diam. Maecenas feugiat nulla sem, vel ultrices nisi fringilla in. Sed ac rutrum purus. Donec libero massa, pulvinar eget elit et, accumsan porttitor orci.
  </p>
  <hr class="col-sm-4 col-sm-offset-4">
</div>
<div class="row subcategory-section">
  <h2 class="center-block text-center clearfix">NONPROFITS</h2>
  <ul class="nav nav-pills home-search col-sm-12 text-center">
    <li role="presentation">
      <button class="btn btn-link nature-btn">Nature</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link culture-btn">Culture</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link education-btn">Education</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link human-services-btn">Human Services</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link view-all-btn">View All</button>
    </li>
  </ul>
</div>
<div class="row subcategories">
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item nature-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-nature=nature-environment" title="Show all Environment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Environment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item nature-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-nature=nature-animals" title="Show all Animals related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Animals</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-culture=culture-arts-culture" title="Show all Arts &amp; Culture related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Arts &amp; Culture</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-culture=culture-community-arts" title="Show all COMMUNITY ARTS/ARTS FOR KIDS related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          COMMUNITY ARTS/<br>
        ARTS FOR KIDS</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-education=education-schools" title="Show all Schools related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Schools</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-education=education-enrichment" title="Show all Educational Enrichment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Educational <br>
        Enrichment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-education=education-literacy" title="Show all Literacy &amp; Learning related nonprofits"> 
          <span class="sr-only">
          Show only
          </span>
        Literacy &amp; Learning</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-human-services=human-services-children-youth" title="Show all Children&sbquo; Youth Families related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Children&sbquo; Youth <br>
        Families</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-girls-women" title="Show all Girls &amp; Women related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Girls &amp; Women</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-health" title="Show all Health &amp; Mental Health related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Health &amp; Mental Health</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-aging" title="Show all Aging related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Aging</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-hunger" title="Show all Hunger related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Hunger</a> </h3>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-homelessness" title="Show all Homelessness &amp; Housing related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Homelessness &amp; Housing</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-human-services=human-services-legal" title="Show all Legal &amp; Justice Programs related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Legal &amp;<br>
        Justice Programs</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3 class="multi-line"> 
        <a href="our-nonprofits.php?strCategory-human-services=human-services-life-skills" title="Show all Life Skills, Training &amp; Employment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Life Skills&sbquo;<br>
        Training &amp; Employment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap text-center">
        <h3> 
        <a href="our-nonprofits.php?strCategory-human-services=human-services-community-development" title="Show all Community Development related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Community Development</a> </h3>
      </div>
    </div>
  </div>
</div>
<!-- end of subcategories -->
<div class="row text-center home-how-help-section">
  <div>
    <h3>How to Help</h3>
    <p class="col-sm-10 col-sm-offset-1">
    Ut non ex eget augue euismod tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean nec ultrices ex. Donec porta rhoncus ipsum, sed gravida urna posuere commodo.
    </p>
    <div class="col-sm-8 col-sm-offset-2">
      <a class="btn btn-primary pull-left" href="#">Donate to a Nonprofit</a> <a class="btn btn-secondary pull-right" href="volunteer-opportunities.php">Volunteer Opportunities</a>
    </div>
  </div>
</div>
</main>
<?php get_template('footer'); ?>