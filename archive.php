<?php
// Header-Datei einbinden
get_header();
?>

<main id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : ?>
                    <header class="archive-header">
                        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
                        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                    </header>

                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            </header>

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="entry-footer">
                                <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                            </footer>
                        </article>
                    <?php endwhile; ?>

                    <?php the_posts_pagination(); ?>

                <?php else : ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php
// Footer-Datei einbinden
get_footer();
?>
