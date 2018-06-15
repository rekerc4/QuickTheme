<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <title>Document</title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script>

    jQuery(document).ready(function() {

	    var beginContent = jQuery("#header").offset().top;
	    var screenWidth = jQuery(window).width();
		function adjustWidth(){
				var containerWidth = jQuery("#container").width();
				jQuery("#header").width(containerWidth);
				}
		jQuery(function(){
				  jQuery("body").resize(function(){
					  adjustWidth();
				  })
			  })

		//jQuery("#nav_container").wrap('<div class="eliminate-jump"></div>');
	    //jQuery(".eliminate-jump").height(jQuery("#nav_container").outerHeight());


	  jQuery(window).scroll(function() {
		  var scrollPosition = (jQuery(window).scrollTop() || jQuery("body").scrollTop());



		  if (scrollPosition >= beginContent) {
			  jQuery("#header").addClass("fixed");
			  jQuery("#header").removeClass("top");
        jQuery("#scroll-spacer").addClass("giveHeight")
		  }
		  else {
			  jQuery("#header").removeClass("fixed");
			  jQuery("#header").addClass("top");
        jQuery("#scroll-spacer").removeClass("giveHeight")
		  }
	  });
  });

  </script>
  <?php wp_head(); ?>
</head>
<body>


<div id="#container" class="container">

  <div class="top-spacer">
  </div>

  <div id="scroll-spacer"></div>

  <div id="header" class="header top">

    <div class="nav clearfix">

      <div class="left-nav">

        <ul class="left-nav-div">

          <li class="about">
            <a href="#about">Bio</a>
          </li>

          <li class="portfolio">
            <a href="#portfolio">Portfolio</a>
          </li>

        </ul>

      </div>

  <div class="photo-of-portfoli">

    <img src="http://res.cloudinary.com/dp8syui83/image/upload/v1514870200/Photo_on_8-5-13_at_4.37_PM_2_yr4dj5.jpg" alt="image of portfolio author" height="auto" width="80%">

  </div>

  <div class="right-nav">

     <ul class="right-nav-div">

          <li class="contact">
            <a href="#contact">Contact</a>
          </li>

          <li class="website">
            <a href="#">Website</a>
          </li>

        </ul>

  </div>

  </div>

  </div>

