<?php

add_action ( 'wp_enqueue_scripts'/*хук для скриптов */, 'style_theme'/*название */ ); /*добавление действия. говорю: ворд проесс пока ты читаешь скрипты
остановись и добавь действие- подключи мои скрипты */

add_action( 'wp_footer'/*хук, когда будут выполняться скрипты в футере я добавлю в этот процесс своих */ , 'scripts_theme' );

add_action ( 'after_setup_theme' , 'theme_register_nav_menu' );
/*вызываем событие (подключение тем) */   /*подключаем свлю функцию название функции которую буду описывать */

add_action ( 'widgets_init' , 'register_my_widgets' );
/*подключаю сайд бар */


function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'left sidebar',
		'id'            => "left_sidebar",
		'description'   => 'описание нашего сайдбара',/*--название которое видно в админке*/
		'before_widget' => '<div class="widget %2$s">',/*какие теги надо ставить до (в какой тег завернуть)*/
		'after_widget'  => "</div>",                   /*какие теги надо ставить после (в какой тег завернуть)*/
		'before_title'  => '<h5 class="widgettitle">', /*в какой тег заварачивать заголовок */
		'after_title'   => "</h5>"
			) );

	register_sidebar( array(
    		'name'          => 'top sidebar',
    		'id'            => "top_sidebar",
    		'description'   => ' верхний сайдбар',
    		'before_widget' => '<div class="widget %2$s">',
    		'after_widget'  => "</div>",
    		'before_title'  => '<h5 class="widgettitle">',
    		'after_title'   => "</h5>"
    			) );
}


function theme_register_nav_menu() {

    register_nav_menu( 'header_menu', 'меню в шапке' );/*'идентификатор при помощи которого вызываем меню', 'название для нас отображается в админке'*/

    register_nav_menu( 'footer_menu', 'меню в подвале' );

    add_theme_support( 'title-tag'); /*могу удалить ТАЙТЛЫ в хедерах и wordpress будет их генерить сам в зависимости от категеории где нахожусь*/

    add_theme_support( 'post-thumbnails', array( 'post' ) ); /*добавляю превьюшки ТОЛЬК для постов*/

    add_image_size( 'post-preview', 500, 250, true ); /*для регистрации новых размеров картинок/превьюшек*/

    add_filter( 'excerpt_more', 'new_excerpt_more' );/*настройка для статьи добавляет ссылку на читать дальше---wp-kama.ru/function/the_excerpt*/
    function new_excerpt_more( $more ){
    	global $post;
    	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
    } /*настройка для статьи добавляет ссылку на читать дальше---wp-kama.ru/function/the_excerpt*/
}

   

function style_theme(){

    wp_enqueue_style/*поодкоючение стиля*/( 'style', get_stylesheet_uri() );  

    wp_enqueue_style( 'default'/*название стиля*/, get_template_directory_uri()/*подключение стиля а дальше путь до него*/ . '/assets/css/default.css' );

    wp_enqueue_style( 'layout', get_template_directory_uri()/*подключение стиля а дальше путь до него*/ . '/assets/css/layout.css' );

    wp_enqueue_style( 'media-queries', get_template_directory_uri()/*подключение стиля а дальше путь до него*/ . '/assets/css/media-queries.css' );
}

function scripts_theme(){

    /*поодкоючение скрипта*/wp_enqueue_script( 'init'/*название скрипта*/, get_template_directory_uri() . '/assets/js/init.js', array ('jquery'), null, true );
   
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array ('jquery'), null, true );
    
    wp_enqueue_script( 'modernizrjs', get_template_directory_uri() . '/assets/js/modernizr.js', array ('jquery'), null, true );

   
    /*поодкоючение jquery*/
    wp_enqueue_script( 'jquery_mini', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array ('jquery'), null, true);

    wp_enqueue_script( 'jquery_migrate', get_template_directory_uri() . 'assets/js/jquery-migrate-1.2.1.min.js', array ('jquery'), null, true);

    wp_enqueue_script( 'jquery_flexslider', get_template_directory_uri() . 'assets/js/jquery.flexslider.js', array ('jquery'), null, true);
}

function myMenu(){

}


?>