<?php
/*
Template Name: Sponsors Template
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
  <div class="nav-backed-header parallax" style="background-image:url();">
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
          <h1>Sponsors</h1>
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
              <div class="col-lg-12 text-center thank-you-text">
                  <p>We would like to thank the following sponsors for supporting our mission of helping children fight cancer. <br>
                     Thank you for sharing our vision of a cancer-free world for children.</p>
              </div>
          </div>
          <div class="row sponsor-row">
              <div class="col-lg-4 text-center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/sponsors/akrom.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://servicemyhvac.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/bauman.jpg" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://www.chicagometalsupply.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/chicago-metal-supply.png" alt=""></a></div>
          </div>

          <div class="row sponsor-row">

              <div class="col-lg-4 text-center"><a href="https://www.facebook.com/Childrens-Ark-Academy-1422469421333466/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/children-ark.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://www.classicembroideryinc.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/classic.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://copernicuscenter.org/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/copernicus-center.jpg" alt=""></a></div>
          </div>

          <div class="row sponsor-row">

              <div class="col-lg-4 text-center"><a href="http://www.doorsforbuilders.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/doors-for-builders.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/sponsors/illinois-eyecare.jpg" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://www.jakubekinc.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/jakubek-inc.jpg" alt=""></a></div>
          </div>

          <div class="row sponsor-row">

              <div class="col-lg-4 text-center"><a href="http://k2picture.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/k2photo.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://ntci.us/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/national-title-center.jpg" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://polskifm.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/polskifm.jpg" alt=""></a></div>
          </div>

          <div class="row sponsor-row">

              <div class="col-lg-4 text-center"><a href="http://qualityttr.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/quality-truck.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://www.qulinarnia.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/qulinarnia.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://deon24.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/radio-deon.jpg" alt=""></a></div>
          </div>

          <div class="row sponsor-row">

              <div class="col-lg-4 text-center"><a href="http://beatabukowski.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/bukowski.jpg" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://ultimatestone.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/ultimate-strone.png" alt=""></a></div>
              <div class="col-lg-4 text-center"><a href="http://radiowpna.com/"><img src="<?php bloginfo('template_directory');?>/images/sponsors/1490am.png" alt=""></a></div>
          </div>

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