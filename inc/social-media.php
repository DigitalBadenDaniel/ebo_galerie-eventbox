<?php if( have_rows('social_media', 'option') ): ?>
    <ul class="social-media">
        <?php while( have_rows('social_media', 'option') ): the_row(); ?>
            <li class="social-media-item">
                <a class="social-media-link" href="<?php the_sub_field('url') ?>" target="_blank">
                    <i class="fab fa-<?php the_sub_field('channel'); ?>"></i>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>