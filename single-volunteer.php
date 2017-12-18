<?php
/*
Template Name: Volunteer Template
Template Post Type: volunteers
*/
?>

<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>You Can Be My Angel</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css"> 
<link href="css/custom.css" rel="stylesheet" type="text/css"> 
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


    <?php $the_query = new WP_Query(array('post_type' => 'volunteers')); ?>

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
          <h1>Board Members</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="/about/" class="pull-right btn btn-primary">All Board Members</a> </div>
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
                <?php the_post_thumbnail('full'); ?>
              <p><?php the_content(); ?></p>
            </article>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget">
                <div class="sidebar-widget-title">
                    <h3>Recent News</h3>
                </div>
                <ul>

                    <?php
                    $args =  array(
                        'post_type' => 'news',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'posts_per_page' => 3
                    );
                    $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <li class="clearfix">
                            <div class="widget-blog-content"><a href="#"><?php the_title(); ?></a> <span class="meta-data"><i class="fa fa-calendar"></i> on <?php echo get_the_date(); ?></span> </div>
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