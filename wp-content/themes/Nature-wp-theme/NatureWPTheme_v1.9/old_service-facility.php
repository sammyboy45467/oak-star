<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div id="container"  data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event-ser" }'>
            <?php

                //get the event custom post types
                $type = 'service';
                $args = array(
                    'post_type'        => $type,
                    'post_status'      => 'publish',
                    'order'            => 'date',
                    'date'             => 'date',
                    'orderby'          => 'title',
                    'posts_per_page'   => -1,
                    "title" => 'SERVICE TITLE',
                    "text" => 'SERVICE DETAILS',
                    "image" => 'SERVICE IMAGE',
                    "url" => 'SERVICE BUTTON URL'
                );

                $my_query = null;
                $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();?>

                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
                ?>
                <div class="wow animated bounceInUp service-box col-sm-12 col-md-6 col-lg-3">


                    <img class="col-md-12" src="<?php echo $src[0]; ?>" alt="<?php the_title(); ?>">
                       <div class="col-md-12 service-text">
                           <h2 class="service-title"><?php the_title(); ?></h2>
                           <p><?php the_content();?></p>

                       </div>

                </div>
        <!--End Content-->
            <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>

</div>
