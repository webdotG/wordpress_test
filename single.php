<?php get_header('page'); ?>


      <!-- Page Title
      ================================================== --><!-- он автоматом подстаояется при поиощи ADD-THEME-SUPPORT в FUNCTIONS.PHP -->
      <div id="page-title">

         <div class="row">

            <div class="ten columns centered text-center">
               <h1>--страница с постом--wp-kama.ru/id_7654/ierarhiya-fajlov-temy-shablona.html<span>.</span></h1>

               <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
               enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
            </div>

         </div>

      </div> <!-- Page Title End-->

      <!-- Content
      ================================================== -->
      <div class="content-outer">

         <div id="page-content" class="row">

            <div id="primary" class="eight columns">

               <article class="post">

                  <div class="entry-header cf">


<!--вывожу заголовок поста-->
<h1><a href="single.html" title=""><?php the_title() ?>.</a></h1>


                     <p class="post-meta">

                        <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                        /
                        <span class="categories">
                        <a href="#">Design</a> /
                        <a href="#">User Inferface</a> /
                        <a href="#">Web Design</a>
                        </span>

                     </p>

                  </div>

                  <div class="post-thumb">

                  <!--функция для вывода изоброжения к посту-->
<?php the_post_thumbnail () ?>

                  </div>

                  <div class="post-content">

                <!--функция для вывода всего контента всех постов-->
<?php the_post(); ?>

                 <!--вывожу контент поста-->
<?php the_content(); ?>



                  </div>

               </article> <!-- post end -->



            <div id="secondary" class="four columns end">

                                 <!--подключаю сайд бар sidebar.php-->
<?php get_sidebar()?>

            </div> <!-- Secondary End-->

         </div>

      </div> <!-- Content End-->

      <!-- Tweets Section
      ================================================== -->
      <section id="tweets">

         <div class="row">

            <div class="tweeter-icon align-center">
               <i class="fa fa-twitter"></i>
            </div>

            <ul id="twitter" class="align-center">
               <li>
                  <span>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
                  </span>
                  <b><a href="#">2 Days Ago</a></b>
               </li>
               <!--
               <li>
                  <span>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
                  </span>
                  <b><a href="#">3 Days Ago</a></b>
               </li>
               -->
            </ul>

            <p class="align-center"><a href="#" class="button">Follow us</a></p>

         </div>

      </section> <!-- Tweets Section End-->



<?php get_footer();?>