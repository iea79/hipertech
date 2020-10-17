
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
<link rel="stylesheet", type="text/css", href="<?php echo get_template_directory_uri() ?>/style.css"/>
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__left"><a class="logo" href="/"><img src="<?php echo wp_get_attachment_url(SCF::get( 'logotip' )) ?>" /></a></div>
        <div class="navbar__toggle"></div>
        <nav class="header__right nav">
          <ul class="navbar">
            <?php
               $nav = SCF::get('nav');
            
               foreach ($nav as $item) {
                   echo '
                   <li class="navbar__item"><a class="navbar__link" href="'.$item["nav__link"].'">'.$item["nav__text"].'</a></li>
                   ';
               };
            ?>
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
        <div class="lines">
          <div class="lines__item"><i class="icon_line"></i><i class="icon_plus"></i><i class="icon_plus"></i><i class="icon_plus"></i></div>
          <div class="lines__item"></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_plus"></i><i class="icon_plus"></i><i class="icon_plus"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"></div>
          <div class="lines__item"><i class="icon_line"></i><i class="icon_plus"></i><i class="icon_plus"></i><i class="icon_plus"></i></div>
        </div>
        <div class="container_center">
          <div class="home__content">
            <div class="home__left">
              <div class="home__img"><img class="home__bg" src="<?php echo wp_get_attachment_url(SCF::get( 'home__bg' )) ?>?<?php echo date('YmdHis');?>" /></div>
            </div>
            <div class="home__right">
              <div class="home__title"><?php echo SCF::get( 'home__title' ); ?></div>
              <div class="home__sub"><?php echo SCF::get( 'home__sub' ); ?></div>
              <div class="home__action">
                <button class="btn btn_plus"><span> </span><?php echo SCF::get( 'home__action' ); ?></button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end home-->
      <!-- begin solutions-->
      <section class="solutions section" id="solutions">
        <div class="lines">
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
        </div>
        <div class="solutions__name"><?php echo SCF::get( 'solutions__name' ); ?></div><img class="solutions__line wow" src="<?php echo get_template_directory_uri() ?>/img/solutions_line.svg?<?php echo date('YmdHis');?>", alt="">
        <div class="container_center">
          <h2 class="section__title"><?php echo SCF::get( 'solutions__title' ); ?></h2>
          <div class="solutions__list">
            <?php
               $solutions__list = SCF::get('solutions__list');
            
               foreach ($solutions__list as $item) {
                   echo '
                   <div class="solutions__item">
                       <div class="solutions__topname">'.$item['solutions__topname'].'</div>
                       <div class="solutions__img"><img src="'.wp_get_attachment_url($item['solutions__img']).'", alt=""></div>
                       <div class="solutions__text">'.$item['solutions__text'].'</div>
                   </div>
                   ';
               };
            ?>
          </div>
        </div>
      </section>
      <!-- end solutions-->
      <!-- begin whatfor-->
      <section class="whatfor section" id="whatfor">
        <div class="lines">
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
        </div><img class="whatfor__line wow" src="<?php echo get_template_directory_uri() ?>/img/whatfor_line.svg?<?php echo date('YmdHis');?>", alt="">
        <div class="container_center">
          <div class="whatfor__wrapper">
            <div class="section__title"><?php echo SCF::get( 'whatfor__title' ); ?></div>
            <div class="whatfor__content">
              <div class="whatfor__top">
                <div class="whatfor__left">
                  <div class="whatfor__primary"><?php echo SCF::get( 'whatfor__primary' ); ?></div>
                  <div class="whatfor__right mobile"><?php echo SCF::get( 'whatfor__right' ); ?> </div>
                  <div class="whatfor__action"><a class="btn btn_plus" href="&lt;?php echo SCF::get( 'whatfor__action' ); ?&gt;"><span></span><?php echo SCF::get( 'whatfor__action' ); ?></a></div>
                </div>
                <div class="whatfor__right desktop"><?php echo SCF::get( 'whatfor__right' ); ?> </div>
              </div>
              <div class="whatfor__bottom">
                <div class="whatfor__label"><?php echo SCF::get( 'whatfor__label' ); ?>:</div>
                <div class="whatfor__list">
                  <?php
                     $whatfor__list = SCF::get('whatfor__list');
                  
                     foreach ($whatfor__list as $item) {
                         echo '
                         <div class="whatfor__listItem">'.$item["whatfor__listItem"].'</div>
                         ';
                     };
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end whatfor-->
      <!-- begin benefits-->
      <section class="benefits section" id="benefits">
        <div class="lines">
          <div class="lines__item"><i class="icon_plus"></i><i class="icon_plus"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_plus"></i><i class="icon_plus"></i><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_line"></i></div>
          <div class="lines__item"><i class="icon_plus"></i><i class="icon_plus"></i></div>
        </div>
        <div class="benefits__name"><?php echo SCF::get( 'benefits__name' ); ?></div><img class="benefits__line wow" src="<?php echo get_template_directory_uri() ?>/img/benefits_line.svg?<?php echo date('YmdHis');?>", alt="">
        <div class="container_center">
          <h2 class="section__title"><?php echo SCF::get( 'benefits__title' ); ?></h2>
          <div class="benefits__list">
            <?php
               $benefits__list = SCF::get('benefits__list');
            
               foreach ($benefits__list as $item) {
                   echo '
                       <div class="benefits__item">
                           <div class="benefits__img">
                               <img src="'.wp_get_attachment_url($item['benefits__img']).'", alt="">
                               <img src="'.wp_get_attachment_url($item['benefits__img']).'", alt="">
                           </div>
                           <div class="benefits__right">'.$item["benefits__right"].'</div>
                       </div>
                   ';
               };
            ?>
          </div>
        </div>
      </section>
      <!-- end benefits-->
      <!-- begin platform-->
      <section class="platform section" id="platform">
        <div class="lines">
          <div class="lines__item"><i class="icon_line"></i><i class="icon_line"></i><i class="icon_line"></i></div>
          <div class="lines__item"></div>
          <div class="lines__item"><i class="icon_line"></i><i class="icon_line"></i><i class="icon_line"></i></div>
          <div class="lines__item"></div>
          <div class="lines__item"><i class="icon_line"></i><i class="icon_line"></i><i class="icon_line"></i></div>
          <div class="lines__item"></div>
          <div class="lines__item"><i class="icon_line"></i><i class="icon_line"></i><i class="icon_line"></i></div>
        </div>
        <div class="container_center">
          <h2 class="section__title"><?php echo SCF::get( 'platform__header' ); ?></h2>
          <div class="platform__scheme"><img class="desktop" src="<?php echo wp_get_attachment_url(SCF::get( 'platform__img_desktop' )) ?>", alt="">
<img class="mobile" src="<?php echo wp_get_attachment_url(SCF::get( 'platform__img_desktop' )) ?>", alt="">
          </div>
          <div class="platform__list">
            <?php
               $platform__list = SCF::get('platform__list');
            
               foreach ($platform__list as $item) {
                   echo '
                       <div class="platform__item">
                           <div class="platform__img">
                               <div class="platform__plus">
                                   <span></span>
                                   <img src="'.wp_get_attachment_url($item['platform__img']).'", alt="">
                               </div>
                           </div>
                           <div class="platform__descr">
                               <div class="platform__title">'.$item["platform__title"].'</div>
                               <div class="platform__text">'.$item["platform__text"].'</div>
                               <div class="platform__line">
                                   <img class="wow" src="'.wp_get_attachment_url($item['platform__line']).'?'.date('YmdHis').'", alt="">
                               </div>
                           </div>
                       </div>
                   ';
               };
            ?>
          </div>
        </div>
      </section>
      <!-- end platform-->
      <!-- begin monitoring-->
      <section class="monitoring section" id="monitoring">
        <div class="lines">
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
        </div>
        <div class="container_center">
          <h2 class="section__title"><?php echo SCF::get( 'monitoring__title' ); ?></h2>
          <div class="monitoring__content"><div class="video__wrapper js-youtube" id="<?php echo SCF::get( 'monitoring__video' ); ?>">
<img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="" class="video__play">
</div>
          </div>
        </div>
      </section>
      <!-- end monitoring-->
      <!-- begin contacts-->
      <section class="contacts section" id="contacts">
        <div class="lines">
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
          <div class="lines__item"></div>
        </div><img class="contacts__line wow" src="<?php echo get_template_directory_uri() ?>/img/contact_line.svg?<?php echo date('YmdHis');?>", alt="">
        <div class="container_center">
          <div class="contacts__content">
            <div class="contacts__left">
              <div class="contacts__legend"><?php echo SCF::get( 'contacts__legend' ); ?></div>
              <div class="contacts__sub"><?php echo SCF::get( 'contacts__sub' ); ?></div><?php echo do_shortcode( '[contact-form-7 id="10" title="Контактная форма 1"]' ); ?>
            </div>
            <div class="contacts__right">
              <h2 class="section__title">Контакты</h2><a class="contacts__mail" href="mailto: <?php echo SCF::get( 'contacts__mail' ); ?>"><?php echo SCF::get( 'contacts__mail' ); ?></a>
              <div class="soc">
                <?php
                   $soc = SCF::get('soc');
                
                   foreach ($soc as $item) {
                       echo '
                       <a href="'.$item["soc__link"].'" target="_blank"></a>
                       ';
                   };
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="map" id="map"><?php echo SCF::get( 'google_map' ); ?></div>
      </section>
      <!-- end contacts-->
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
      <div class="footer__content">
        © HiPer. <?php echo SCF::get( 'copy' ); ?> <a href="<?php echo SCF::get( 'privacy__link' ); ?>"><?php echo SCF::get( 'privacy' ); ?></a>
        <?php wp_footer() ?>
      </div>
    </footer><script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/function.js"></script>
<?php echo SCF::get( 'analize' ); ?>
  </body>
</html>