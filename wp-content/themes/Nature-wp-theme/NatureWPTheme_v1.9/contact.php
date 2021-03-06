<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title col-md-12 wow animated fadeIn">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p class="sub-title"><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->
        <!--Content-->
        <div class="container">
            <div class="row container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow animated fadeIn">
                        <h6><?php the_content();?></h6>
                </div>
            </div>
            <div class="row container-fluid contact-centered">
                <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 wow animated fadeIn" style="margin:50px 0 50px 0;">
                    <?php echo do_shortcode('[contact]');?>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 wow animated fadeIn">
                    <?php echo do_shortcode('[google_maps id="361"]');?>
                </div>
            </div>
        </div>
        <!--End Content-->
    </div>
</div>