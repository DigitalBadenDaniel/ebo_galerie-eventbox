<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="text-center">
                    <h2 class="small-underline-center h4 color-3 mb-6" style="color:#566966;"><?php the_sub_field('headline'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('usp_hinzufugen')) : ?>
                <?php while (have_rows('usp_hinzufugen')) : the_row(); ?>
                    <div class="col-lg-3">
                        <div class="text-center mb-lg-0 mb-4">
                            <?php $bild = get_sub_field('bild'); ?>
                            <?php $size = 'thumbnail'; ?>
                            <?php if ($bild) : ?>
                                <?php echo wp_get_attachment_image($bild, $size, '', array("class" => "img-fluid border-radius mb-2 mb-lg-2 usp-icon")); ?>
                            <?php endif; ?>
                            <p><img width="20px" height="20px;" class="mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/checkmark2.svg"><?php the_sub_field('usp'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>



