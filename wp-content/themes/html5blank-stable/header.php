<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script type="text/javascript" async="" src="<?php echo get_template_directory_uri(); ?>/js/ec.js"></script>
	    <script type="text/javascript" async="" src="<?php echo get_template_directory_uri(); ?>/js/analytics.js"></script>
	    <script async="" src="<?php echo get_template_directory_uri(); ?>/js/gtm.js"></script>
	    <script type="text/javascript" async="" src="<?php echo get_template_directory_uri(); ?>/js/ga.js"></script>
	    
	    <!-- <link href="https://livedemo00.template-help.com/joomla_49489/" rel="canonical">
	    <link href="https://livedemo00.template-help.com/joomla_49489/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0">
	    <link href="https://livedemo00.template-help.com/joomla_49489/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0"> -->
	   
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/template.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/komento.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kunena.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/camera.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superfish.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superfish-navbar.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superfish-vertical.css" type="text/css">
	    
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-noconflict.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/tabs-state.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/caption.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/es5-shim.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.centerIn.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/ios-orientationchange-fix.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/desktop-mobile.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/mootools-core.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/core.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/camera.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/superfish.min.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobilemenu.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js" type="text/javascript"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/supersubs.js" type="text/javascript"></script>
	    <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/sftouchscreen.js" type="text/javascript"></script> -->
	    <script type="text/javascript">
	        jQuery(window).on('load', function() {
	            new JCaption('img.caption');
	        });

	        function keepAlive() {
	            var myAjax = new Request({
	                method: "get",
	                url: "index.php"
	            }).send();
	        }
	        window.addEvent("domready", function() {
	            keepAlive.periodical(840000);
	        });
	        jQuery(document).ready(function() {
	            jQuery('.hasTooltip').tooltip({
	                "html": true,
	                "container": "body"
	            });
	        });
	    </script>

	    <link href="<?php echo get_template_directory_uri(); ?>/css" rel="stylesheet" type="text/css">
	    <!--[if lt IE 8]>
	    <div style=' clear: both; text-align:center; position: relative;'>
	      <a href="https://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
	        <img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	      </a>
	    </div>
	  <![endif]-->
	    <!--[if lt IE 9]>
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js"></script>
	  <![endif]-->
	    <style type="text/css">
	        .cf-hidden {
	            display: none;
	        }
	        .cf-invisible {
	            visibility: hidden;
	        }
	    </style>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
    	<!-- Body -->
    	<div id="wrapper">
	        <div class="wrapper-inner">
	            <!-- Top -->
	            <div id="top-row">
	                <div class="row-container">
	                    <div class="container-fluid">
	                        <div id="top" class="row-fluid">
	                            <!-- Logo -->
	                            <div id="logo" class="span4">
	                                <a href="<?php echo home_url(); ?>">
	                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ice Hockey Team">
	                                    <h1><?php bloginfo('name'); ?></h1>
	                                </a>
	                            </div>
	                            <nav class="moduletable navigation span8">
	                            	<?php html5blank_nav(); ?>
	                                <!-- <ul class="sf-menu" id="module-103">
	                                    <li class="item-101 current active firstItem"><a href="">Home</a>
	                                    </li>
	                                    <li class="item-167 deeper dropdown parent"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about" class="sf-with-ul">About</a>
	                                        <ul class="sub-menu" style="display: none;">
	                                            <li class="item-172 firstItem"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about/history">History</a>
	                                            </li>
	                                            <li class="item-170 deeper dropdown parent"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about/team" class="sf-with-ul">Team</a>
	                                                <ul class="sub-menu" style="display: none;">
	                                                    <li class="item-171 lastItem firstItem"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about/team/testimonials">Testimonials</a>
	                                                    </li>
	                                                </ul>
	                                            </li>
	                                            <li class="item-168"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about/faqs">FAQs</a>
	                                            </li>
	                                            <li class="item-263"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/template-settings">Template settings</a>
	                                            </li>
	                                            <li class="item-299 lastItem"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/about/forum">Forum</a>
	                                            </li>
	                                        </ul>
	                                    </li>
	                                    <li class="item-169"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/services">Services</a>
	                                    </li>
	                                    <li class="item-173"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/news">News</a>
	                                    </li>
	                                    <li class="item-109"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/blog">Blog</a>
	                                    </li>
	                                    <li class="item-102 lastItem"><a href="https://livedemo00.template-help.com/joomla_49489/index.php/contact">Contact</a>
	                                    </li>
	                                </ul> -->
	                                <!-- <select class="select-menu" id="menu-module-103">
	                                    <option value="#">Navigate to...</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/" selected="selected">Home</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about">About</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about/history">–History</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about/team">–Team</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about/team/testimonials">––Testimonials</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about/faqs">–FAQs</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/template-settings">–Template settings</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/about/forum">–Forum</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/services">Services</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/news">News</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/blog">Blog</option>
	                                    <option value="https://livedemo00.template-help.com/joomla_49489/index.php/contact">Contact</option>
	                                </select> -->

	                                <script>
	                                    // initialise plugins
	                                    jQuery(function($) {
	                                        $('#module-103')

	                                        .superfish({
	                                                hoverClass: 'sfHover',
	                                                pathClass: 'overideThisToUse',
	                                                pathLevels: 1,
	                                                delay: 500,
	                                                animation: {
	                                                    opacity: 'show',
	                                                    height: 'show'
	                                                },
	                                                speed: 'normal',
	                                                speedOut: 'fast',
	                                                autoArrows: false,
	                                                disableHI: false,
	                                                useClick: 0,
	                                                easing: "swing",
	                                                onInit: function() {},
	                                                onBeforeShow: function() {},
	                                                onShow: function() {},
	                                                onHide: function() {},
	                                                onIdle: function() {}
	                                            })
	                                            .mobileMenu({
	                                                defaultText: "Navigate to...",
	                                                className: "select-menu",
	                                                subMenuClass: "sub-menu"
	                                            });

	                                        var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
	                                        if (ismobile) {
	                                            $('#module-103').sftouchscreen();
	                                        }
	                                        $('.btn-sf-menu').click(function() {
	                                            $('#module-103').toggleClass('in')
	                                        });
	                                    })
	                                </script>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            
