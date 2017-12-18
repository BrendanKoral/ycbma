<?php
/*
Template Name: Donate Template
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

<!--TODO: Event list on the right column-->
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  <!-- Start Site Header -->
    <?php get_header(); ?>
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
        <div class="col-md-12">
          <h1>Donate</h1>
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
                        <header class="single-post-header clearfix">
                            <h2 class="post-title">How you can help</h2>
                        </header>
                        <div class="post-content">
                            <p>Help us save more lives by donating to You Can Be My Angel</p>
                            <div class="donate-btn">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick"><br>
                                    <input name="hosted_button_id" type="hidden" value="PD7J925MM65F4"><br>
                                    <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image"><br>
                                    <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" style="opacity: 1; visibility: visible;">
                                </form>
                            </div>
                            <h3>Donate By Mail</h3>
                            <p><strong>Send a check to:</strong></p>
                            <p>You Can Be My Angel Foundation<br>
                                5214 W. Lawrence Ave.<br>
                                Chicago, IL 60630</p>
                            <p>All donations are tax-deductible. Our federal tax ID number is 46-2268098.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Thank you for your support!</p>
                                </div>
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