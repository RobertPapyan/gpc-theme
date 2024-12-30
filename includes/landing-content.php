
<div class="landing_hero" style="background-image: url(<?php echo get_theme_mod('heroBgImage')?>)">
    <div class="landing_hero_container">
        <h1 class="landing_hero_h1"><?php echo get_theme_mod('heroH1Text')?></h1>
        <div class="landing_hero_separator"></div>
        <h3 class="landing_hero_h3"><?php echo get_theme_mod('heroH3Text')?></h3>
    </div>
</div>


<section class="ourValues_section">
    <div class="ourValues_container">
        <h2 class="ourValues_h2"><?php echo get_theme_mod('ourValuesTitle')?></h2>
        <div class="ourValues_main" style="background-image: url(<?php echo get_theme_mod('ourValuesBgImage') ?>)">
            <div class="ourValues_blur">
                <div class="ourValues_f1">
                    <div class="ourValues_f_item">
                            <h3><?php echo get_theme_mod('value1')?></h3>
                            <p><?php echo get_theme_mod('value1text')?></p>
                    </div>
                    <div class="ourValues_f_item">
                            <h3><?php echo get_theme_mod('value2')?></h3>
                            <p><?php echo get_theme_mod('value2text')?></p>
                    </div>                     
                </div>
                <div class="ourValues_f2">
                    <div class="ourValues_f_item">
                            <h3><?php echo get_theme_mod('value3')?></h3>
                            <p><?php echo get_theme_mod('value3text')?></p>
                    </div>
                    <div class="ourValues_f_item">
                            <h3><?php echo get_theme_mod('value4')?></h3>
                            <p><?php echo get_theme_mod('value4text')?></p>
                    </div>       
                </div>
            </div>
        </div>
    </div>
</section>


<section class="events_section">
    <div class="events_section_container">
        <h1 class="events_section_h1"><?php echo get_theme_mod('categoryTitle')?></h1>
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php 
            $events = get_posts(['numberposts' => 6, 'category_name'=>get_theme_mod('categoryName')]);
           
            foreach($events as $event){

            
            ?>
            <div class="swiper-slide">
                <a href="<?php echo($event->guid);?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($event)?>)">
                    <div>
                        <p><?php echo ($event->post_title); ?></p>
                    </div>
                </a>
            </div>

           <?php }?>
        

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper_butons_container">
        <div class="slider-prev sw_button b1"><button><i class="fa-solid fa-caret-left"></i></button></div>
        <div class="slider-next sw_button b2"><button><i class="fa-solid fa-caret-right"></i></button></div>
        </div>

    </div>    
    <div></div>

</section>


<section class="partners_section">
                <div class="partners_section_item">
                    <div class="partners_section_item_flex">
                        <div class="partners_item_img"><img src="<?php echo get_theme_mod('partner1Logo')?>" alt=""></div>
                        <div class="partners_item_separator"></div>
                        <p class="partners_item_p"><?php echo get_theme_mod('partner1Text')?></p>
                    </div>
                    <div  class="partners_section_item_flex2">
                        <a href="<?php echo get_theme_mod('partner1Url')?>" target="_blank"><span><?php echo get_theme_mod('goToWebsite')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="partners_section_item">
                    <div class="partners_section_item_flex">
                        <div class="partners_item_img"><img src="<?php echo get_theme_mod('partner2Logo')?>" alt=""></div>
                        <div class="partners_item_separator"></div>
                        <p class="partners_item_p"><?php echo get_theme_mod('partner2Text')?></p>
                    </div>
                    <div  class="partners_section_item_flex2">
                        <a href="<?php echo get_theme_mod('partner2Url')?>" target="_blank"><span><?php echo get_theme_mod('goToWebsite')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="partners_section_item">
                    <div class="partners_section_item_flex">
                        <div class="partners_item_img"><img src="<?php echo get_theme_mod('partner3Logo')?>" alt=""></div>
                        <div class="partners_item_separator"></div>
                        <p class="partners_item_p"><?php echo get_theme_mod('partner3Text')?></p>
                    </div>
                    <div  class="partners_section_item_flex2">
                        <a href="<?php echo get_theme_mod('partner3Url')?>" target="_blank"><span><?php echo get_theme_mod('goToWebsite')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="partners_section_item">
                    <div class="partners_section_item_flex">
                        <div class="partners_item_img"><img src="<?php echo get_theme_mod('partner4Logo')?>" alt=""></div>
                        <div class="partners_item_separator"></div>
                        <p class="partners_item_p"><?php echo get_theme_mod('partner4Text')?></p>
                    </div>
                    <div  class="partners_section_item_flex2">
                        <a href="<?php echo get_theme_mod('partner4Url')?>" target="_blank"><span><?php echo get_theme_mod('goToWebsite')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="partners_section_item">
                    <div class="partners_section_item_flex">
                        <div class="partners_item_img"><img src="<?php echo get_theme_mod('partner5Logo')?>" alt=""></div>
                        <div class="partners_item_separator"></div>
                        <p class="partners_item_p"><?php echo get_theme_mod('partner5Text')?></p>
                    </div>
                    <div  class="partners_section_item_flex2">
                        <a href="<?php echo get_theme_mod('partner5Url')?>" target="_blank"><span><?php echo get_theme_mod('goToWebsite')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="partners_section_item_2">
                    <div class="partners_section_logo_flex">
                        <img src="<?php echo get_theme_mod('partner6Logo')?>" alt="">
                        <img src="<?php echo get_theme_mod('partner7Logo')?>" alt="">
                    </div>
                    <p class="partners_item_2_p"><?php echo get_theme_mod('partner67Text')?></p>
                </div>
</section>