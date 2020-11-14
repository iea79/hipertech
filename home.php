
<!-- begin home-->
<section class="homescreen section" id="home">
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
    <div class="homescreen__content">
      <div class="homescreen__left">
        <div class="homescreen__img wow"><img class="home__bg" src="<?php echo wp_get_attachment_url(SCF::get( 'home__bg' )) ?>?<?php echo date('YmdHis');?>" /></div>
      </div>
      <div class="homescreen__right">
        <div class="homescreen__title"><?php echo SCF::get( 'home__title' ); ?></div>
        <div class="homescreen__sub"><?php echo SCF::get( 'home__sub' ); ?></div>
        <div class="homescreen__action"><a class="btn btn_plus" href="<?php echo SCF::get( 'home__action_link' ); ?>"><span> </span><?php echo SCF::get( 'home__action' ); ?></a></div>
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
  <div class="solutions__name"><?php echo SCF::get( 'solutions__name' ); ?></div>
  <div class="solutions__line wow"><img class="" src="<?php echo get_template_directory_uri() ?>/img/solutions_line.svg?<?php echo date('YmdHis');?>", alt=""></div>
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
  </div>
  <div class="whatfor__line wow"><img src="<?php echo get_template_directory_uri() ?>/img/whatfor_line.svg?<?php echo date('YmdHis');?>", alt=""></div>
  <div class="container_center">
    <div class="whatfor__wrapper">
      <div class="section__title"><?php echo SCF::get( 'whatfor__title' ); ?></div>
      <div class="whatfor__content">
        <div class="whatfor__top">
          <div class="whatfor__left">
            <div class="whatfor__primary"><?php echo SCF::get( 'whatfor__primary' ); ?></div>
            <div class="whatfor__right mobile"><?php echo SCF::get( 'whatfor__right' ); ?> </div>
            <div class="whatfor__action"><a class="btn btn_plus" href="<?php echo SCF::get( 'whatfor__action_link' ); ?>"><span></span><?php echo SCF::get( 'whatfor__action' ); ?></a></div>
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
  <div class="benefits__name"><?php echo SCF::get( 'benefits__name' ); ?></div>
  <div class="benefits__line wow"><img class="" src="<?php echo get_template_directory_uri() ?>/img/benefits_line.svg?<?php echo date('YmdHis');?>", alt=""></div>
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
<section class="platform section">
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
    <div class="platform__name"><?php echo SCF::get( 'platform__header' ); ?></div>
    <h2 class="section__title"><?php echo SCF::get( 'platform__header' ); ?></h2>
    <div class="platform__anchore" id="platform"></div>
    <div class="platform__scheme"><img class="desktop" src="<?php echo wp_get_attachment_url(SCF::get( 'platform__img_desktop' )) ?>", alt="">
<img class="mobile" src="<?php echo wp_get_attachment_url(SCF::get( 'platform__img_mobile' )) ?>", alt="">
    </div>
    <div class="platform__list">
      <?php
         $platform__list = SCF::get('platform__list');
         $i = 1;
         foreach ($platform__list as $item) {
             $line = get_template_directory_uri() .'/img/platform_line_'.$i.'.svg?'.date('YmdHis');
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
                         <div class="platform__line wow">
                             <img  src="'.$line.'", alt="">
                         </div>
                     </div>
                 </div>
             ';
             $i++;
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
<!-- begin faq-->
<section class="faq section" id="faq">
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
    <h2 class="section__title"><?php echo SCF::get( 'faq__title' ); ?></h2>
    <div class="faq__name"><?php echo SCF::get( 'faq__title' ); ?></div>
    <div class="faq__content">
      <?php
         $faq__list = SCF::get('faq__list');
      
         foreach ($faq__list as $item) {
             echo '
             <div class="faq__item">
                 <div class="faq__quest">'.$item["faq__quest"].'
                     <div class="faq__toggle"></div>
                 </div>
                 <div class="faq__text">
                     '.$item["faq__text"].'
                 </div>
             </div>
             ';
         };
      ?>
    </div>
  </div>
</section>
<!-- end faq-->
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
  </div>
  <div class="contacts__line wow"><img src="<?php echo get_template_directory_uri() ?>/img/contact_line.svg?<?php echo date('YmdHis');?>", alt=""></div>
  <div class="container_center">
    <div class="contacts__content">
      <div class="contacts__left">
        <div class="contacts__legend"><?php echo SCF::get( 'contacts__legend' ); ?></div>
        <div class="contacts__sub"><?php echo SCF::get( 'contacts__sub' ); ?></div><?php echo do_shortcode( '[contact-form-7 id="354" title="Contact form"]' ); ?>
      </div>
      <div class="contacts__right">
        <h2 class="section__title"><?php echo SCF::get( 'contact__title' ); ?></h2><a class="contacts__mail" href="mailto: <?php echo SCF::get( 'contacts__mail' ); ?>"><?php echo SCF::get( 'contacts__mail' ); ?></a>
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
        <div class="contacts__address"><?php echo SCF::get( 'contact__address' ); ?></div>
      </div>
    </div>
  </div><?php 
     if (SCF::get( 'google_map' )) {
         ?>
         <div class="map" id="map">
             <?php echo SCF::get( 'google_map' ); ?>
         </div>
         <?php 
     }
  ?>
</section>
<!-- end contacts-->