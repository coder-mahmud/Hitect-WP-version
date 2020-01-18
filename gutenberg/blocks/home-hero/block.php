<?php
/*

    Block Name: Home Hero

*/
?>
    <?php
        $title = get_field('hitech_home_hero_heading');
        $subtitle = get_field('hitech_home_hero_subheading');
        $bg_img = get_field('hitech_home_hero_bg');
    ?>

    <section class="hero" style="background-image: url('<?php echo $bg_img ;?>');">
        <div class="hero_content">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <h1><?php echo $title ;?></h1>
                        <p><?php echo $subtitle ;?></p>
                    </div>
                </div>

                <div class="row">

                    <?php if( have_rows('hitech_home_hero_button') ): ?>
                        <?php $i=1; while( have_rows('hitech_home_hero_button') ): the_row(); ?>
                            
                            <?php 
                            
                              $text = get_sub_field('home_hero_button_text'); 
                              $link = get_sub_field('home_hero_button_link');
                            
                            ?>

                            <div class="col-md-4 hero_link">
                                <a  class="black_button_w_border" href="<?php echo $link ;?>"><span><?php echo $text ;?></span></a>
                            </div>

                            
                        <?php $i++; endwhile; ?>
                    <?php endif; ?>


                </div>


            </div>            
        </div>

    </section>