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
                        <p class="small text-muted">
                            <?php the_date() ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block mt-5 mt-lg-0 col-12 col-lg-5">
                <!-- None for posts -->
            </div>
        </div>
    </div>
</section>