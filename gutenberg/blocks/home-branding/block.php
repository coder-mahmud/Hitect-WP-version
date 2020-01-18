<?php
/*

    Block Name: Home Hero

*/
?>
    <?php
        $img = get_field('home_branding_img');
        $title = get_field('hitech_home_branding_title');
        $text = get_field('hitech_home_branding_text');
        $link = get_field('home_branding_link');
    ?>

    <section class="branding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <img src="<?php echo $img ;?>" alt="">
                    <h3><?php echo $title ;?></h3>
                    <p><?php echo $text ;?></p>
                    <a class="black_button_w_border" href="<?php echo $link ;?>"><span>Learn More</span></a>

                </div>
            </div>
        </div>
    </section>
