<?php
/*

    Block Name: Home Hero

*/
?>
    <?php
        $img = get_field('home_get_started_img');
        $title = get_field('hitech_home_get_started_title');
        $subtitle = get_field('hitech_home_get_started_subtitle');
        $text = get_field('hitech_home_get_started_desc');
        $link = get_field('home_get_started_link');
    ?>

    <section class="get_started">
        <div class="container">
            <div class="row heading">
                <div class="col-12">
                    <h2 class="area_title_red"><?php echo $title ;?></h2>
                    <h3 class="area_subtitle"><?php echo $subtitle ;?></h3>
                </div>
            </div>
            <div class="row content">
                
                <div class="col-12 ">
                    <div class="row text_content">

                        <div class="col-md-3 my-auto">
                            <img src="<?php echo $img ;?>" alt="">
                        </div>
                        <div class="col-md-9 my-auto text-left">
                            <p><?php echo $text ;?></p>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="<?php echo $link ;?>" class="red_button_w_border"><span>Send Your Case</span></a>
                </div>
            </div>
        </div>
    </section>
