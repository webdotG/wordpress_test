<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
<!--<title>Sparrow - Free Responsive HTML5/CSS3 Template</title>--> <!-- он автоматом подстаояется при поиощи ADD-THEME-SUPPORT в FUNCTIONS.PHP -->
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <!--CSS
    ================================================== 
   <link rel="stylesheet" href="http://test-wordpress/wp-content/themes/sparrow/assets/css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
       -->

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 
                           
                           <?php wp_head();?>
</head>

<body>
                            <?php echo get_template_directory_uri();?>
   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
           
                             <a href="<?php echo home_url(); ?>"><img alt="" src="images/logo.png">
                             <div><?php bloginfo( 'name' ); ?></div>
                              </a>
            </div>

             
            <nav id="nav-wrap">


               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>


               <?php wp_nav_menu(array(
               
               'theme_location'  => 'header_menu',
               'container'       => null,
               'menu_class'      => 'nav',
	            'menu_id'         => 'nav',

              )) ?> <!--функция для вывода своего меню через functions.php -->


           <!--<ul id="nav" class="nav">

	               <li class="current"><a href="index.htm">Home</a></li>
	               <li><span><a href="blog.html">Blog</a></span>
                     <ul>
                        <li><a href="blog.html">Blog Index</a></li>
                        <li><a href="single.html">Post</a></li>
                     </ul>
                  </li>
                  <li><span><a href="portfolio-index.html">Portfolio</a></span>
                     <ul>
                        <li><a href="portfolio-index.html">Portfolio Index</a></li>
                        <li><a href="portfolio.html">Portfolio Entry</a></li>
                     </ul>
                  </li>
	               <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="styles.html">Features</a></li>
                  -->
               </ul> <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->