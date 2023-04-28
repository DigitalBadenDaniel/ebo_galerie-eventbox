<div class="position-relative teaser teaser-post bg-light">
    <a class="align-self-center" href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('1_1', ['class' => '']) ?>
        <?php else: ?>
            <!-- fallback to 1x1 gray pixel -->
            <img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mO88R8AArUB2TtNwp8AAAAASUVORK5CYII=" alt="No post thumbnail">
        <?php endif; ?>
    </a>

    <div class="position-absolute teaser-content">
        <div class="teaser-title position-relative bg-dark p-3">
            <h3 class="has-regular-font-size font-weight-normal mb-0">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-white"><?php the_title() ?></a>
            </h3>

            <div class="teaser-link d-flex justify-content-end position-absolute">
                <a class="small bg-primary text-white p-1 pl-5" href="<?php the_permalink(); ?>">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

</div>