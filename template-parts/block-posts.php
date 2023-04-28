<?php

$q_args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
];

if($ids = get_sub_field('specific_posts_to_show')) {
    $q_args = array_merge($q_args, [
        'post_in' => $ids,
        'ignore_sticky_posts' => true,
    ]);
} else {
    $q_args = array_merge($q_args, [
        'order' => 'DESC',
        'orderby' => 'date'
    ]);
}

$query = new WP_Query($q_args);

?>

<?php if($query->have_posts()): ?>
    <section class="block block-posts" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <h2><?= get_sub_field('title') ?></h2>
                </div>
            </div>

            <div class="row">
                <?php while($query->have_posts()): $query->the_post() ?>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <?php get_template_part('template-parts/content', get_post_type()); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
            </div>
        </div>
    </section>
<?php endif; ?>