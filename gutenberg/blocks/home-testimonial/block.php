<?php
/*

    Block Name: Home Hero

*/
?>
    <?php
        $img = get_field('home_testimonial_img');
        $title = get_field('hitech_home_testimonial_title');
        $subtitle = get_field('hitech_home_testimonial_subtitle');
    ?>

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo $img ;?>" alt="" class="heading_image">
                    <h2 class="title"><?php echo $title ;?></h2>
                    <h3 class="subtitle"><?php echo $subtitle ;?></h3>
                </div>

                <div class="col-12 testimonial_text">
                    
                    <div class="owl-carousel">


                        <?php if( have_rows('home_testimonials') ): ?>
                            <?php $i=1; while( have_rows('home_testimonials') ): the_row(); ?>
                                
                                <?php 
                                
                                  $text = get_sub_field('home_testimonial_text'); 
                                  $client = get_sub_field('home_testimonial_client');
                                
                                ?>

                                <div class="item">
                                    <p>“<?php echo $text;?>”</p>
                                    <h5 class="client"><?php echo $client ;?></h5>
                                </div>

                                
                            <?php $i++; endwhile; ?>
                        <?php endif; ?>


                    </div>

                </div>
            </div>
        </div>
    </section>
