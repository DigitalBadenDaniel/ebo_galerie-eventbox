<?php $block_id = 'accordion_' . uniqid(); ?>
<section class="block block-accordion" >
    <div class="container-fluid mb-0 py-5">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <?php if (have_rows('accordion')): ?>
                    <?php while (have_rows('accordion')) : the_row(); ?>
                        <div class="card bg-transparent border-left-0 border-right-0 <?= get_row_index() === 1 ? '' : 'border-top-0' ?>" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-header bg-transparent border-0 px-0" id="<?= $block_id . '_h_' . get_row_index() ?>">
                                <h2 class="mb-0 has-regular-font-size">
                                    <button class="btn btn-link btn-block text-left font-weight-bolder text-body text-decoration-none px-0 collapsed" type="button" data-toggle="collapse" data-target="#<?= $block_id . '_c_' . get_row_index() ?>" aria-expanded="false" aria-controls="<?= $block_id . '_c_' . get_row_index() ?>">
                                        <?= get_sub_field('title') ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="<?= $block_id . '_c_' . get_row_index() ?>" class="collapse" aria-labelledby="<?= $block_id . '_h_' . get_row_index() ?>">
                                <div class="card-body bg-transparent p-0">
                                    <?= get_sub_field('content') ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <?= _x('No content found, add some.', 'content', 'mindstudios'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

