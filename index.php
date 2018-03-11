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

  <!-- End Site Header -->


  <!-- Start Hero Slider -->
<!--<div class="custom-rs-styles">-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                    <?php echo get_new_royalslider(1); ?>

            </div>
        </div>

    </div>

<!--</div>-->


<div class="slider-wrapper theme-default">
  	<div class="nivoslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-effect="random" data-thumbs="no" data-slices="15" data-animSpeed="500" data-pauseTime="3000" data-pauseonhover="yes">
<!--    	<img src="--><?php //bloginfo('template_directory');?><!--/images/slider/first.jpg" alt="Parade">-->
  	</div>


<!--  </div>-->
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">

            <?php

            $posts = get_posts(array(
                'post_type'			=> 'events',
                'posts_per_page'	=> 1,
                'meta_key'			=> 'date_picker_date',
                'orderby'			=> 'meta_value',
                'order'				=> 'DESC'
            ));

            if( $posts ): ?>


            <?php foreach( $posts as $post ):

            setup_postdata( $post );

            ?>

            <?php

            $event_date = get_field("date_picker_date");

            $event_date = new DateTime($event_date);

            ?>




            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <span class="meta-data"><?php echo $event_date->format("jS F, Y");?></span> </div>


          <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="<?php echo $event_date->format("j F Y");?>">
              <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
              <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
              <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
              <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
          </div>
          <div class="col-md-2 col-sm-6 hidden-xs"> <a href="/calendar/" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
      </div>
    </div>
  </div>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php endif; ?>

  <!-- End Notice Bar --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-4 col-sm-4 featured-block"> <a href="/children/" class="img-thumbnail"> <img src="<?php bloginfo('template_directory');?>/images/slider/iwo.jpg" alt="staff"> <strong>Children</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="/calendar/" class="img-thumbnail"> <img src="<?php bloginfo('template_directory');?>/images/homepage-events.jpg" alt="staff"> <strong>Events</strong> <span class="more">view all</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="/news/" class="img-thumbnail"> <img src="http://youcanbemyangel.com/wp-content/uploads/2017/02/News_DSC_4899-1-1.jpg" alt="staff"> <strong>News</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- Events Listing -->
            <div class="spacer-30"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <a href="http://youcanbemyangel.com/events/you-can-be-my-angel-foundations-five-year-anniversary/"><img class='koncert-urodzinowy img-responsive' src='<?php bloginfo('template_directory');?>/images/flyer.jpg' alt='prezencik'></a>
                      <img class='prezencik img-responsive' src='<?php bloginfo('template_directory');?>/images/prezencik.jpg' alt='prezencik'>

                      <!--        TODO: Make sponsor logos into slider          -->

                      <h1 class="homepage-cstm-font">Supporters</h1>
                      <div class="hidden-xs">
                        <?php echo get_new_royalslider(2); ?>
                      </div>
                </div>

              </div>

              <div class="visible-xs">
                  <div class="container">
                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="http://radiowpna.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/1490am.png" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/sponsors/akrom.png" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://servicemyhvac.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/bauman.jpg" alt=""></a></div>
                      </div>

                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="http://beatabukowski.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/bukowski.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://www.chicagometalsupply.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/chicago-metal-supply.png" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="https://www.facebook.com/Childrens-Ark-Academy-1422469421333466/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/children-ark.png" alt=""></a></div>
                      </div>

                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="http://www.classicembroideryinc.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/classic.png" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://copernicuscenter.org/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/copernicus-center.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://www.doorsforbuilders.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/doors-for-builders.png" alt=""></a></div>
                      </div>

                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/sponsors/illinois-eyecare.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://www.jakubekinc.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/jakubek-inc.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://k2picture.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/k2photo.png" alt=""></a></div>
                      </div>

                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="http://ntci.us/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/national-title-center.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://polskifm.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/polskifm.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://qualityttr.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/quality-truck.png" alt=""></a></div>
                      </div>

                      <div class="row sponsor-row">
                          <div class="col-lg-4 text-center"><a href="http://www.qulinarnia.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/qulinarnia.png" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://deon24.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/radio-deon.jpg" alt=""></a></div>
                          <div class="col-lg-4 text-center"><a href="http://ultimatestone.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/ultimate-strone.png" alt=""></a></div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php get_footer(); ?>

</div>

<?php wp_footer(); ?>
</body>
</html>