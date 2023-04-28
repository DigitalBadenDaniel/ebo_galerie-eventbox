<section class="block ">
    <div class="img-bg">
        <div class="container">
<?php if ( have_rows( 'bild-text_modul' ) ) : ?>
				<?php while ( have_rows( 'bild-text_modul' ) ) : the_row(); ?>
					<?php if (get_sub_field('img-position') == 1) : ?>
    <?php
    $first = 'col-lg-5 offset-lg-1 order-2';
    $second = 'col-lg-6 order-1';
    ?>
<?php else : ?>
    <?php
    $first = 'col-lg-5 order-lg-1 order-2';
    $second = 'col-lg-6 offset-lg-1 order-lg-2 order-1';
    ?>
<?php endif; ?>
<div class="row flex-row align-items-center block">
            <div class="<?php echo $first ?>" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="small-underline"><?php the_sub_field('headline'); ?></h2>
                <?php the_sub_field('text'); ?>
                <?php if (have_rows('button')) : ?>
                    <?php while (have_rows('button')) : the_row(); ?>
                        <?php $button_link = get_sub_field('button_link'); ?>
                        <?php if ($button_link) : ?>
                            <a class="btn-eb btn" href="<?php echo esc_url($button_link['url']); ?>" target="<?php echo esc_attr($button_link['target']); ?>"><?php echo esc_html($button_link['title']); ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
            <div class="<?php echo $second ?>" data-aos="fade-up" data-aos-duration="1500">
                <?php if ( get_sub_field( 'gif' ) == 1 ) : ?>
				<?php $sizeGif = 'full' ?>
			<?php else : ?>
				<?php $sizeGif = 'img_teaser' ?>
			<?php endif; ?>
                <?php if (get_sub_field('video_or_img') == 1) : ?>
                <div class="mb-4 mb-lg-0"><?php the_sub_field( 'video' ); ?></div>
                <?php else : ?>
                    <?php $bild = get_sub_field('bild'); ?>
                    <?php $size = $sizeGif; ?>
                    <?php if ($bild) : ?>
                        <?php echo wp_get_attachment_image($bild, $size, '', array("class" => "img-fluid border-radius mb-4 mb-lg-0")); ?>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
					
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>

</div>
    </div>
</section>








