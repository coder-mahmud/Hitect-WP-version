<?php
/*

    Block Name: Home Hero

*/
?>
    <?php
        $title = get_field('hitech_home_products_title');
    ?>

    <section class="home_product_area">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <h2 class="title"><?php echo $title ;?></h2>
                </div>

                <?php if( have_rows('hitech_home_products') ): ?>
                    <?php $i=1; while( have_rows('hitech_home_products') ): the_row(); ?>
                        
                        <?php 
                        
                          $title = get_sub_field('home_product_title'); 
                          $desc = get_sub_field('home_product_desc'); 
                          $img = get_sub_field('home_product_img'); 
                          $link = get_sub_field('home_product_link'); 
                        
                        ?>

                        <div class="col-md-4">
                            <div class="single_product">
                                <div class="inner">
                                    <h2 class="title"><?php echo $title ;?></h2>
                                    <p><?php echo $desc ;?></p>
                                    <img src="<?php echo $img ;?>" alt="">
                                    <a href="<?php echo $link ;?>" class="white_button_w_border"><span>View More</span></a>
                                </div>
                                
                            </div>
                        </div>

                        
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
                

            </div>
        </div>
    </section>
