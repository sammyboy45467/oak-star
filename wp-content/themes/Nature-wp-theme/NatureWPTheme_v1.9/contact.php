<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title col-md-12">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php the_content(); ?>
        </div>
        <!--End Content-->
    </div>
</div>
