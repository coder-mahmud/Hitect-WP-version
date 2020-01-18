<?php
/*

    Block Name: Home Descripion below Hero

*/
?>
    <?php
        $image = get_field('hitech_desc_blw_hero_image');
        $desc = get_field('desc_blw_hero_text');
        $text = get_field('desc_blw_hero_link_text');
        $link = get_field('desc_blw_hero_link_target');
    ?>

    <section class="learn_more">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo $image ;?>" alt="">
                    <p><?php echo $desc ;?></p>
                    <a class="black_button_w_border" href="<?php echo $link ;?>"><span><?php echo $text ;?></span></a>
                </div>
            </div>
        </div>
    </section>