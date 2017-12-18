<?php
/*
Template Name: Calendar Template
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
  <div class="nav-backed-header parallax" style="background-image:url(<?php echo get_field("top_img", 59); ?>);">
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
          <h1>Calendar of Events</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">

          <?php

          $args =  array(
              'post_type' => 'events',
              'meta_key' => 'date_picker_date',
              'orderby' => 'meta_value',
              'order' => 'DESC'
          );

          $prev_event = null;

          $custom_query = new WP_Query( $args );

          while ($custom_query->have_posts()) : $custom_query->the_post();

              $event_date = get_field("date_picker_date");

              $event_date = new DateTime($event_date);

              $current_event = $event_date->format("F");


              if ($prev_event != $current_event):

              ?>
          <div class="row">
              <div class="col-md-8 col-md-offset-4">
                  <div class="separator">
                      <span><?php echo $event_date->format("F Y");?></span>
                  </div>
              </div>
          </div>
              <?php endif; ?>



          <div class="row">

              <div class="col-md-4 col-sm-4 text-center">

                  <?php if (has_post_thumbnail()) {

                      the_post_thumbnail();

                  } else {?>
                      <img class="event-page-icon" src="<?php bloginfo('template_directory');?>/images/ycbma_logo.png" alt="Logo">
                  <?php }
                  ?>

              </div>

              <div class="col-md-8 col-sm-8">



                  <a class="event-anchor" href="<?php the_permalink(); ?>">
                      <h3 class="event-page-title"><?php the_title(); ?></h3>
                  </a>
                  <h4><?php echo $event_date->format("F jS");?> | <?php the_field('event_time'); ?></h4>
                  <h4><?php the_field('event_location') ?></h4>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>"><span>Find out more...</span></a>

                  <?php if ($prev_event != $current_event):

                  ?>

                  <hr>

                  <?php endif;

                  $prev_event = $current_event;

                  ?>
              </div>
          </div>

          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
    <!-- Start Footer -->

    <?php get_footer(); ?>

    <!-- End Footer -->
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 


<?php wp_footer(); ?>

</body>
</html>