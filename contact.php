<?php
/*
Template Name: Contact Us Template
*/
?>

<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
          ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
      ================================================== -->
    <!-- Nivo Slider Styles -->
    <!-- Color Style -->
    <!-- SCRIPTS
      ================================================== -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Start Site Header -->

    <?php get_header(); ?>

    <!-- End Site Header -->
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image: url(<?php echo get_field("top_img", 42); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">

          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

                <h3>Thank you for visiting the You Can Be My Angel Foundation website.</h3>
                <h4>Please complete the form below and a member of our team will contact you shortly.</h4>


                  <?php

                  $your_query = new WP_Query( 'pagename=contact' );

                  while ( $your_query->have_posts() ) : $your_query->the_post();
                      the_content();
                  endwhile;

                  wp_reset_postdata();

                  ?>


                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div id="message"></div>
                </div>
              <header class="single-post-header clearfix">
                  <h2 class="post-title">Our Location</h2>
              </header>
              <div class="post-content">
                  <h5><i class="fa fa-map-marker" aria-hidden="true"></i> 5214 W Lawrence Ave, Chicago, IL 60630 | <i class="fa fa-phone"></i>  (773) 225-9749</h5>
                  <div id="gmap">
                      <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=41.9680843,-87.7603484&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                  </div>
            </div>
          </div>
          <!-- Start Sidebar -->
        </div>
      </div>
    </div>
  </div>
    <!-- Start Footer -->

    <?php get_footer(); ?>

    <!-- End Footer -->
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>