<section class="block block-referenz">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="text-center"><h2 class="small-underline-center"><?php the_sub_field( 'headline' ); ?></h2></div>
            </div>

        </div>
        <div class="row flex-row align-items-center justify-content-center">
            <?php $referenz_logos_images = get_sub_field( 'referenz_logos' ); ?>
            <?php $referenz_logos_ids = get_sub_field('referenz_logos'); ?>
            <?php $size = 'logo'; ?>
            <?php if ($referenz_logos_ids) : ?>
                <?php foreach ($referenz_logos_ids as $referenz_logos_id): ?>
                    <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1500">
                        <?php echo wp_get_attachment_image($referenz_logos_id, $size, '', array("class" => "img-fluid m-2 px-4")); ?>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
            
            
           
        </div>
    </div>
</section>

			