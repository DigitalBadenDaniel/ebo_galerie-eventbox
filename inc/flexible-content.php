<?php if (have_rows('blocks')): ?>
<?php $iblock = 1; ?>
    <?php while (have_rows('blocks')) : the_row(); ?>
        <div id="<?php echo 'anker',$iblock; ?>"></div>
        <?php get_template_part( 'template-parts/block', get_row_layout() ); ?>
      <?php $iblock++ ?>
    <?php endwhile; ?>
<?php else: ?>
    <!-- No flexible content found -->
<?php endif; ?>