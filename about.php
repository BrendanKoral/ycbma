<?php
/*
Template Name: About Us Template
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
  <div class="nav-backed-header parallax" style="background-image:url(<?php echo get_field("top_img", 17); ?>);">
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
          <h1>About Us</h1>
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

              <?php
              // query for the about page
              $your_query = new WP_Query( 'pagename=about' );
              // "loop" through query (even though it's just one page)
              while ( $your_query->have_posts() ) : $your_query->the_post();
                  the_content();
              endwhile;
              // reset post data (important!)
              wp_reset_postdata();
              ?>


              <iframe class="ytvideo-aboutus" width="200" height="150" src="https://www.youtube.com/embed/o_zv7V7iRkY"></iframe>

            <hr>
            <h3 id="ourstaff">YCBMAF Board Members</h3>
          </div>

            <?php
            $args =  array(
                'post_type' => 'volunteers',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <div class="col-md-4 col-sm-4">
                <div class="grid-item staff-item">
                  <div class="grid-item-inner">
                    <div class="media-box"> <?php the_post_thumbnail( 'thumbnail' );?> </div>
                    <div class="grid-content">

                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a><br>

                      <h4><?php the_field('volunteer_position'); ?></h4>


                        <p><?php the_excerpt(); ?></p>

                    </div>
                  </div>
                </div>
            </div>

            <?php endwhile; ?>

            <hr>

            <h1>Financial Info</h1>
            <p>All relevant financial information for the You Can Be My Angel foundation can be found below.</p>
            <ul class="finance-info">
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2013-tax-return.pdf">2013 Tax Return</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2013-ycbmaf-annual-report.pdf">2013 Annual Report</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2014-statement-of-activity.pdf">Statement of Activity</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2014-statement-of-financial-position.pdf">Statement of Financial Position</a>
                </li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2014-tax-return.pdf">2014 Tax Return</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2015-statement-of-activity.pdf">2015 Statement of Activity</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2015-statement-of-financial-position.pdf">2015 Statement of Financial
                        Position</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2015-tax-return.pdf">2015 Tax Return</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="/wp-content/themes/ycbma/documents/2016-audited-financial-statements.pdf">2016 Audit Financial Statement</a></li>
            </ul>

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