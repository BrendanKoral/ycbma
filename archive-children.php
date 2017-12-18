<?php
/*
Template Name: Children Template
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
<!-- TODO: Add header image -->
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Start Site Header -->

    <?php get_header(); ?>

    <!-- End Site Header -->
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(<?php echo get_field("top_img", 136); ?>);">
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
          <h1>Children</h1>
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
          <div class="col-md-9 posts-archive causes-archive">

              <?php
              $args =  array(
                  'post_type' => 'children',
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
              );
              $custom_query = new WP_Query( $args );
              while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                  <article class="post cause-item">
                      <div class="row">
                          <div class="col-md-4 col-sm-4 text-center">
                              <a href="<?php the_permalink(); ?>">

                                  <?php if ( has_post_thumbnail() ) {?>

                                  <?php the_post_thumbnail(); ?>

                                  <?php }  else { ?>

                                      <img src="<?php bloginfo('template_directory');?>/images/ycbma_logo.png" alt="Logo">

                                  <?php }?>


                              </a>
                          </div>
                          <div class="col-md-8 col-sm-8">
                              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <p><?php the_excerpt(); ?></p>
                          </div>
                      </div>
                  </article>




              <?php endwhile; ?>


          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget search-form-widget">
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>All Children</h3>
              </div>
              <ul>

                  <?php
                  $args =  array(
                      'post_type' => 'children',
                      'orderby' => 'menu_order',
                      'order' => 'ASC'
                  );
                  $custom_query = new WP_Query( $args );
                  while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

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