
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <?= get_field('heading') ?? get_the_title() ?>
                        </h1>
                    </div>
                    <div class="col-12 offset-lg-2 col-lg-10">
                        <?= get_field('excerpt') ?>
                        <?php if(get_field('link')): ?>
                            <a href="<?= get_field('link')['url'] ?>" class="small font-weight-bold" target="<?= get_field('link')['target'] ?>">
                                <?= get_field('link')['title'] ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block mt-5 mt-lg-0 col-12 col-lg-5 snap-lg-right">
                <?php if (get_field('mood_media')): ?>
                    <div class="border-accent aspect-ratio aspect-ratio-16_9">
                        <?php if (get_field('mood_media')['type'] == 'video'): ?>
                                <video class="w-100 h-100" autoplay muted loop preload="auto">
                                    <source src="<?= get_field('mood_media')['url'] ?>" type="<?= get_field('mood_media')['mime_type'] ?>">
                                </video>
                        <?php elseif (get_field('mood_media')['type'] == 'image'): ?>
                            <?= wp_get_attachment_image(get_field('mood_media')['id'], '16_9', false, ['class' => 'w-100 h-auto']) ?>
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