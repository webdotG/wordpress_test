<?php get_header('page'); ?>


      <!-- Page Title
      ================================================== --><!-- он автоматом подстаояется при поиощи ADD-THEME-SUPPORT в FUNCTIONS.PHP -->
      <div id="page-title">

         <div class="row">

            <div class="ten columns centered text-center">
               <h1>CATEGORY<span>.</span></h1>

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
<!--

/*ЕСЛИ НАМ НУЖНО ВЫВЕСТИ ПОСТЫ ИЗ ОПРЕДЕЛЕННОЙ КАТЕГОРИИ ИЛИ ТЕГА ИЛИ ЕЩЁ ЧЕГО ГДЕ WRODPRESS МОЖЕТ САМ ПОДОБРАТЬ ПОСТЫ*/

  /* ТО МЫ ИСПОЛЬЗУЕМ СТАНДАРТНЫЙ ЦИКЛ WORDPRESS - IF(HAVE_POSTS()) { WHILE(HAVE_POSTS()) { THE_POST() } } */

<?php if (have_posts()) { while (have_posts()) { the_post();/*функция/цикл для вывода поста*/?>

                <article>                                  /*куда выводить посты*/
                <h1><?php the_title(); ?> </h1>            /*заголовок статьи*/
                </article>
                <?php the_content(); ?>                   /*контент статьи*/
<?php
}                                                          /*конец WHILE*/
}                                                           /*конец IF*/
?>
-->

<-- оборачивая в такой цикл пост я автоматом добавляю его внося коррективы в стандарт wordpress -->

<?php if (have_posts()) { while (have_posts()) { the_post();/*функция/цикл для вывода поста*/?>

               <article class="post">

                  <div class="entry-header cf">

<h1><a href="<?php the_permalink() ?>"/*выводит ссылку на сам пост*/ title=""><?php the_title() ?></a></h1>

                     <p class="post-meta">

<time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                        /
                        <span class="categories">
<?php the_category ( $separator='/', '') ?>
<?php the_tags ( '', ' / ') ?>

                        </span>

                     </p>

                  </div>

                  <div class="post-thumb">
                     <a href="<?php the_permalink() ?>"/*выводит ссылку на сам пост*/ title="">
<?php the_post_thumbnail('post-preview'/*зарегистрировал размер в functions.php/add_image_size*/); ?> <!-- для вывода превьюшек в WP-ADMIN-НАСТРОЙКИ-МЕДИАФАЙЛЫ-РАЗМЕР/для настройки размеров -->
                     </a>
                  </div>

                  <div class="post-content">

<?php the_excerpt() ?><!--выводит краткое содержание поста а не пост целиком ЭТУ ФУЕКЦИЮ МОЖНО НАСТРОИТЬ-wp-kama.ru/function/the_excerpt-->

                  </div>

               </article> <!-- post end -->

<?php
}    ?>                                                         <!--  /*конец WHILE*/ -->

<!--НАСТРОЙКИ-ЧТЕНИ-ОТОБРОЖАТЬ ПОСТОВ НА СТРАНИЦЕ--wp-kama.ru/function/the_posts_pagination -->

<?php the_posts_pagination(); ?><!--для вывода пагинации -->

                    <!--Pagination
                                    <nav class="col full pagination">
                          			      <ul>
                                          <li><span class="page-numbers prev inactive">Prev</span></li>
                          				      <li><span class="page-numbers current">1</span></li>
                          				      <li><a href="#" class="page-numbers">2</a></li>
                                          <li><a href="#" class="page-numbers">3</a></li>
                                          <li><a href="#" class="page-numbers">4</a></li>
                                          <li><a href="#" class="page-numbers">5</a></li>
                                          <li><a href="#" class="page-numbers">6</a></li>
                                          <li><a href="#" class="page-numbers">7</a></li>
                                          <li><a href="#" class="page-numbers">8</a></li>
                                          <li><a href="#" class="page-numbers">9</a></li>
                          				      <li><a href="#" class="page-numbers next">Next</a></li>
                          			      </ul>
                          		      </nav>-->


<?php
}                                                               /*конец IF*/
?>







            </div> <!-- Primary End-->

            <div id="secondary" class="four columns end">

<?php get_sidebar()?><!--подключаю сайд бар sidebar.php-->

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