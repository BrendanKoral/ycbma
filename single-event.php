<?php
/*
Template Name: Event Template
Template Post Type: events
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
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Start Site Header -->

    <?php get_header(); ?>

    <?php $the_query = new WP_Query(array('post_type' => 'events')); ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <!-- End Site Header -->
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
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
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>Events</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="/calendar/" class="pull-right btn btn-primary">All events</a> </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php the_title(); ?></h2>
            </header>
            <article class="post-content">
              <div class="event-description">
                  <?php

                  $banner = get_field('event_banner') ?>

                  <img src="<?php echo $banner['url'] ?>" class="img-responsive">
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Event details</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">


                            <?php

                            $event_date = get_field("date_picker_date");

                            $event_date = new DateTime($event_date);

                            ?>



                          <li><i class="fa fa-calendar"></i> <?php echo $event_date->format("jS F, Y");?></li>
                          <li><i class="fa fa-clock-o"></i> <?php the_field('event_time') ?></li>
                          <li><i class="fa fa-map-marker"></i> <?php the_field('event_location') ?></li>
                          <li><i class="fa fa-phone"></i> <?php the_field('event_contact') ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="list-group">
                      </ul>
                  </div>
                </div>
                <?php the_content(); ?>
              </div>
            </article>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget-upcoming-events widget">
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent News</h3>
              </div>
              <ul>

                  <?php
                  $args =  array(
                      'post_type' => 'news',
                      'orderby' => 'menu_order',
                      'order' => 'ASC',
                      'posts_per_page' => 5
                  );
                  $custom_query = new WP_Query( $args );
                  while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                      <li class="clearfix"> <a href="#" class="media-box post-image"> <?php the_post_thumbnail('thumbnail') ?></a>
                          <div class="widget-blog-content"><a href="#"><?php the_title(); ?></a> <span class="meta-data"><i class="fa fa-calendar"></i> on <?php echo get_the_date('n F Y') ?></span> </div>
                      </li>

                  <?php endwhile; ?>

              </ul>
            </div>
          </div>
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