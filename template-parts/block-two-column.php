

<section class="block block-2-teaser">
    <div class="container">
        
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
<div class="row">
               
            <?php if (have_rows('column')) : ?>
                <?php while (have_rows('column')) : the_row(); ?>
                    <?php $verlinkung = get_sub_field('verlinkung'); ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                        <?php if ($verlinkung) : ?>
                        <a class="no-link" href="<?php echo esc_url($verlinkung['url']); ?>" target="<?php echo esc_attr($verlinkung['target']); ?>">
                            <?php endif; ?>
                            <div class="mb-lg-4 mb-3">
                                <div class="overflow-hidden mb-4 border-radius">
                                    <?php $bild = get_sub_field('bild'); ?>
                                    <?php $size = 'overlap_img'; ?>
                                    <?php if ($bild) : ?>
                                        <?php echo wp_get_attachment_image($bild, $size, '', array("class" => "img-fluid  img-hover mb-4 mb-lg-0")); ?>
                                    <?php endif; ?>
                                </div>
                                <h2 class="h4"><?php the_sub_field('headline'); ?></h2>
                                <p class="mb-4"><?php the_sub_field('text'); ?></p>

                                <?php if ($verlinkung) : ?>
                                    <a class="btn-eb btn mb-4 mb-lg-0" href="<?php echo esc_url($verlinkung['url']); ?>" target="<?php echo esc_attr($verlinkung['target']); ?>"><?php echo esc_html($verlinkung['title']); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php if ($verlinkung) : ?>
                            </a>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>

 </div>
            </div>

        </div>
    </div>
</section>                                              