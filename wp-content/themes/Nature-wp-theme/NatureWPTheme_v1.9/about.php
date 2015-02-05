<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title col-md-12" data-adaptive-background="1" data-ab-css-background="1">

            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <span id="about-image" class="col-md-6">

        </span>
                <div class="col-md-12">
                    <div class="about-text">

                            <?php the_content(); ?>

                    </div>
                </div>
        <!--End Content-->
    </div>
</div>
