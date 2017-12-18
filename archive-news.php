<?php
/*
Template Name: News Template
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
    <div class="nav-backed-header parallax" style="background-image:url(<?php echo get_field("top_img", 141); ?>);">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- End Nav Backed Header -->
    <!-- Start Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>News Timeline</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <ul class="timeline">


                    <?php
                    $args =  array(
                        'post_type' => 'news',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>



                        <li <?php post_class(); ?>>
                            <div class="timeline-badge"><?php echo get_the_date('F');?> <span><?php echo get_the_date('Y');?></span></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><small class="text-muted"><i class="fa fa-calendar"></i> <?php echo get_the_date();?></small></p>
                                </div>
                                <div class="timeline-body">
                                    <div class="row">

                                    <div class="col-xs-6">
                                    <p><?php the_excerpt(); ?></p>
                                    </div>

                                    <div class="col-xs-6">

                                        <a href="<?php the_permalink(); ?>">

                                            <?php if (has_post_thumbnail()) {

                                            the_post_thumbnail();

                                             } else {?>
                                            <img src="<?php bloginfo('template_directory');?>/images/ycbma_logo.png" alt="Logo">
                                            <?php }
                                            ?>
                                        </a>

                                    </div>

                                    </div>
                            </div>
                        </li>

                    <?php endwhile; ?>



                </ul>
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