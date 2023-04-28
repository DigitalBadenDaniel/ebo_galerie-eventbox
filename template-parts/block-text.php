<section class=" block block-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" data-aos="fade-up" data-aos-duration="1500">
                <?php $headline = get_sub_field('headline'); ?>
                <?php if ($headline) : ?>
                <h2 class="small-underline"><?php the_sub_field( 'headline' ); ?></h2>
                <?php endif; ?>
                <?= get_sub_field('text') ?>
            </div>
        </div>
    </div>
</section>

