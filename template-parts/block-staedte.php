<section class="block block-city" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="small-underline"><?php the_sub_field('headline'); ?></h2>
                <p><?php the_sub_field('text'); ?></p>            
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'staedte',
                        'posts_per_page' => 100,
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    $counter = 1;
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>   
                        <div class="col-lg-4 col-6">
                            <span class="city-link"> <?php the_title() ?> </span>
                        </div>
                        <?php $counter++ ?>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>    
                </div>
            </div>
        </div>
    </div>
</section>



