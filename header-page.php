
                           
                           <?php wp_head();?>

<body>

                        <div class"sidebar-functions.php">

                        <?php dynamic_sidebar( 'top_sidebar' ); ?>

                        </div>
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
               
               'theme_location'  => 'footer_menu',
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