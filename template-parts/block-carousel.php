<section><div class="container">
        <div class="row">
            <div class="col-12">
<div class="carousel">
<?php if ( have_rows( 'carousel-item' ) ) : ?>

 

				<?php while ( have_rows( 'carousel-item' ) ) : the_row(); ?>
    <div class="mx-3">
        <?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) : ?>
        <a class="no-link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
					<?php endif; ?>
					<?php $bild = get_sub_field( 'bild' ); ?>
					<?php $size = 'medium'; ?>
					<?php if ( $bild ) : ?>
						<?php echo wp_get_attachment_image( $bild, $size, false, ['class' =>'img-fluid border-radius mb-3'] ); ?>
					<?php endif; ?>
            <p class="small">
					<?php the_sub_field( 'text' ); ?>
                </p>
					<?php if ( $link ) : ?>
                                                </a>
					<?php endif; ?>
                                                </div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
                                                
			<?php endif; ?>
</div>
            </div>
        </div>
    </div>

    </section>