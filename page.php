
<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package HiPer Tech
* @subpackage HiPer Tech
*/
/*
Theme Name: HiPer Tech Themes
Author: Evgeniy Ivanov
Author URI: http://frontendie.ru
Template Name: Main template
Template Post Type: page, post
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <meta name="description" content=""/>
    <?php wp_head() ?>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/fav/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/fav/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  </head><body <?php body_class() ?>>
  <header class="header">
    <div class="header__content">
      <div class="header__left"><a class="logo" href="/"><?php echo get_custom_logo( $blog_id ); ?></a></div>
      <div class="navbar__toggle"></div>
      <nav class="header__right nav">
        <?php
           wp_nav_menu( array(
               'theme_location' => 'menu1',
               'menu_id'        => 'main-menu',
               'container'      => '',
               'menu_class'     => 'navbar',
           ) );
        ?>
        <div class="lang">
          <?php
          function language_selector_fullname(){
             $languages = icl_get_languages('skip_missing=0&orderby=code');
             // echo json_encode($languages);
             if(!empty($languages)){
                 foreach($languages as $l){
                     if(!$l['active']) {
                         echo '<a  class="lang__link" href="'.$l['url'].'">'.$l['code'].'</a>';
                     }
                 }
             }
          }
          language_selector_fullname();
          ?>
        </div>
      </nav>
    </div>
  </header>
  <main class="main_content">
    <?php
    	while ( have_posts() ) :
    		the_post();
    		if (is_front_page()) {
    			require get_template_directory() . '/home.php';
    		} else {
              echo "<div class='container_center'>";
              echo "<div class='textPage'>";
              echo "<h1 class='h1'>";
    			the_title();
              echo "</h1>";
              the_content();
              echo "</div>";
              echo "</div>";
    		}
    	endwhile; // End of the loop.
    ?>
  </main>
  <footer class="footer">
    <div class="lines">
      <div class="lines__item"></div>
      <div class="lines__item"></div>
      <div class="lines__item"></div>
      <div class="lines__item"></div>
      <div class="lines__item"></div>
      <div class="lines__item"></div>
      <div class="lines__item"></div>
    </div>
    <div class="footer__content">© HiPer IT. <?php echo SCF::get( 'copy' ); ?> <a href="<?php echo get_privacy_policy_url(); ?>" target="_blank"><?php echo SCF::get( 'privacy' ); ?></a>
      <?php wp_footer() ?>
    </div>
  </footer><?php echo SCF::get( 'analize' ); ?></body>
</html>