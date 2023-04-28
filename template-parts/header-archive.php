<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <?php if ((is_home() || is_category()) && get_field('heading', get_option('page_for_posts'))): ?>
                                <?= get_field('heading', get_option('page_for_posts')) ?>
                            <?php else: ?>
                                <?php the_archive_title(); ?>
                            <?php endif; ?>
                        </h1>
                    </div>
                    <div class="col-12 offset-lg-2 col-lg-10">
                        <?php if (get_field('excerpt', get_option('page_for_posts'))): ?>
                            <?= get_field('excerpt', get_option('page_for_posts')) ?>
                        <?php else: ?>
                            <?= the_archive_description() ?>
                        <?php endif; ?>

                        <?php if(get_field('link', get_option('page_for_posts'))): ?>
                            <a href="<?= get_field('link', get_option('page_for_posts'))['url'] ?>" class="small font-weight-bold" target="<?= get_field('link', get_option('page_for_posts'))['target'] ?>">
                                <?= get_field('link', get_option('page_for_posts'))['title'] ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block mt-5 mt-lg-0 col-12 col-lg-5 snap-lg-right">
                <?php if (get_field('mood_media', get_option('page_for_posts'))): ?>
                    <div class="border-accent">
                        <?php if (get_field('mood_media', get_option('page_for_posts'))['type'] == 'video'): ?>
                            <div class="aspect-ratio aspect-ratio-16_9">
                                <video class="w-100 h-100" autoplay muted loop preload="auto">
                                    <source src="<?= get_field('mood_media'), get_option('page_for_posts')['url'] ?>" type="<?= get_field('mood_media', get_option('page_for_posts'))['mime_type'] ?>">
                                </video>
                            </div>
                        <?php elseif (get_field('mood_media', get_option('page_for_posts'))['type'] == 'image'): ?>
                            <?= wp_get_attachment_image(get_field('mood_media', get_option('page_for_posts'))['id'], '16_9', false, ['class' => 'w-100 h-auto']) ?>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <?= _x('Invalid media type', 'page-header', 'mindstudios') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>