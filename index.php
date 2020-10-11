
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
    <link rel="stylesheet", type="text/css", href="<?php echo get_template_directory_uri() ?>/style.css"/>
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__left"><a class="logo" href="/"><img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="alt" /></a></div>
        <nav class="header__right">
          <ul class="navbar">
            <li class="navbar__item"><a class="navbar__link" href="">Платформа HiPer</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Принцип работы</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Преимущества</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Решения</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Пакеты услуг</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Контакты</a></li>
          </ul>
          <div class="lang">
            <?php
            function language_selector_fullname(){
               $languages = icl_get_languages('skip_missing=0&orderby=code');
               // echo json_encode($languages);
               if(!empty($languages)){
                   foreach($languages as $act){
                       if($act['active']) {
                           echo '<a class="lang__link active" href="">'.$act['code'].'</a>';
                       }
                   }
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
      <!-- begin home-->
      <section class="home section" id="home">
        <div class="container_center">
          <div class="home__content">
            <div class="home__left">
              <div class="home__img"><img src="<?php echo get_template_directory_uri() ?>/img/home_img.png" /></div>
            </div>
            <div class="home__right">
              <h1 class="section__title">Решения компании HiPer Tech делают <span>достижение и поддержание высокой эффективности </span><br/>в эксплуатации инженерных систем выгодными</h1>
              <div class="home__sub">Вы можете управлять лишь тем, что вы измеряете. Сделайте первый шаг к достижению высокой эффективности! <span>HiPer It!</span></div>
              <div class="home__action">
                <button class="btn btn_plus"><span>HiPer CHECKUP</span></button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end home-->
    </main>
    <footer class="footer">
      <div class="footer__content">
        <p>&copy; 2016 |<i class="fa fa-github" aria-hidden="true">&nbsp;</i><a href="#">View Source</a></p>
      </div>
      <?php wp_footer() ?>
    </footer><script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/function.js"></script>
  </body>
</html>