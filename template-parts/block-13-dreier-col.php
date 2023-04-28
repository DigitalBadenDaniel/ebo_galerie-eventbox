<?php if (get_sub_field('background-color') == 1) : ?>
    <?php $backgroundColor = 'py-5 bg-color-2-10' ?>
<?php else : ?>
    <?php $backgroundColor = 'py-5' ?>
<?php endif; ?>
<div class="container block">
    <div class="row flex-row align-items-lg-stretch">
        <?php if (have_rows('spalte_hinzufugen')) : ?>
            <?php while (have_rows('spalte_hinzufugen')) : the_row(); ?>
                <div class="col-lg-4 mb-4 mb-lg-5" data-aos="fade-up" data-aos-duration="1500">
                    <?php $link = get_sub_field('link'); ?>
                    <?php if ($link) : ?>
                        <a class="no-link" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                        <?php endif; ?>
                        <div class="text-center px-5 h-100 <?php echo $backgroundColor; ?>">
                            <?php $icon = get_sub_field('icon'); ?>
                            <?php if ($icon) : ?>
                                <img class="img-fluid mb-lg-5 mb-3  border-radius" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                            <?php endif; ?>
                            <h2 class="h4"><?php the_sub_field('uberschrift'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                        <?php if ($link) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

    </div>
</div>