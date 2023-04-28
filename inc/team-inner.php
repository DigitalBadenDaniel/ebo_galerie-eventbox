<?php if (have_rows('team_inhalt')): ?>
    <?php while (have_rows('team_inhalt')) : the_row(); ?>
        <?php if (get_row_layout() == 'vorlage') : ?>
            <?php the_sub_field('team_kategorie'); ?>
            <?php $bild = get_sub_field('bild'); ?>
            <?php if ($bild) : ?>
                <img src="<?php echo esc_url($bild['url']); ?>" alt="<?php echo esc_attr($bild['alt']); ?>" />
            <?php endif; ?>
            <?php the_sub_field('name'); ?>
            <?php the_sub_field('text'); ?>
        <?php elseif (get_row_layout() == 'bild_1_1') : ?>
            <div class="aspect-ratio-1_1 mb-2 filterDiv <?php the_sub_field('team_kategorie'); ?>" >
                <div class="team-kachel-wrapper">
                    <div class="team-kachel-1-1-inner">
                        <div class="p-3 p-md-3 p-lg-5 text-white absolute-bottom-0">
                            <p class="din-font-head color-white pb-3"><?php the_sub_field('name'); ?></p>
                            <div class="din-font color-white">
                                <p>
                                    <?php the_sub_field('text'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $bild = get_sub_field('img'); ?>
                    <?php if ($bild) : ?>
                        <img class="w-100 aspect-ratio-1_1" src="<?php echo esc_url($bild['sizes']['1_1']); ?>" alt="<?php echo esc_attr($bild['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif ( get_row_layout() == 'bild_1_2' ) : ?>
                <div class="aspect-ratio-1_2 mb-2 overflow-hidden filterDiv <?php the_sub_field( 'team_kategorie' ); ?>" >
                            <div class="team-kachel-wrapper">
                                <div class="team-kachel-1-1-inner">
                                    <div class="p-3 p-md-3 p-lg-5 text-white absolute-bottom-0">
                                        <p class="din-font-head color-white pb-3"><?php the_sub_field( 'name' ); ?></p>
                                        <div class="din-font color-white">
                                            <p>
                                                <?php the_sub_field( 'text' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php $img2 = get_sub_field( 'img2' ); ?>
			<?php if ( $img2 ) : ?>
				<img class="img-fluid aspect-ratio-1_2" src="<?php echo esc_url( $img2['sizes']['1_2.018'] ); ?>" alt="<?php echo esc_attr( $img2['alt'] ); ?>" />
			<?php endif; ?>
                            </div>

                        </div>
		<?php elseif ( get_row_layout() == 'bild_1_2_green_footer' ) : ?>
                <div class="mb-2 filterDiv <?php the_sub_field( 'team_kategorie' ); ?>" >
                    <div class="aspect-ratio-1_2" >
                        <?php $img3 = get_sub_field( 'img3' ); ?>
			<?php if ( $img3 ) : ?>
				<img class="w-100 aspect-ratio-1_2" src="<?php echo esc_url( $img3['sizes']['1_1'] ); ?>" alt="<?php echo esc_attr( $img3['alt'] ); ?>" />
			<?php endif; ?>
                    </div>
                    <div class="aspect-ratio-1_1_bottom bg-color-1">
                        <div class="p-3 p-md-3 p-lg-5  text-white absolute-bottom-0">
                            <p class="din-font-head color-white pb-3"><?php the_sub_field( 'name' ); ?></p>
                            <div class="din-font color-white">
                                <p>
                                 <?php the_sub_field( 'text' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
			
			
			
			
		<?php elseif ( get_row_layout() == 'bild_1_1_light_green_footer' ) : ?>
                <div class="mb-2 filterDiv <?php the_sub_field( 'team_kategorie' ); ?>" >
                    <div class="aspect-ratio-1_1">
                        <?php $img4 = get_sub_field( 'img4' ); ?>
			<?php if ( $img4 ) : ?>
				<img class="w-100 aspect-ratio-1_1" src="<?php echo esc_url( $img4['sizes']['1_1'] ); ?>" alt="<?php echo esc_attr( $img4['alt'] ); ?>" />
			<?php endif; ?>
                    </div>
                    <div class="aspect-ratio-1_1_bottom bg-color-3-20">
                        <div class="p-3 p-md-3 p-lg-5 text-white absolute-bottom-0">
                            <p class="din-font-head color-black pb-3"><?php the_sub_field( 'name' ); ?></p>
                            <div class="din-font color-black">
                                <p>
                                    <?php the_sub_field( 'text' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
			
			
		<?php elseif ( get_row_layout() == 'bild_1_2_blur_effekt' ) : ?>
                <div class="aspect-ratio-1_1 mb-2 overflow-hidden team-kachel filterDiv <?php the_sub_field( 'team_kategorie' ); ?>" >
                            <?php $img5 = get_sub_field( 'img5' ); ?>
			<?php if ( $img5 ) : ?>
				<img class="w-100 aspect-ratio-1_1 hover-blur" src="<?php echo esc_url( $img5['sizes']['1_1'] ); ?>" alt="<?php echo esc_attr( $img5['alt'] ); ?>" />
			<?php endif; ?>
                            <div class="team-inner">
                                <div class="p-3 p-md-3 p-lg-5 text-white absolute-bottom-0">
                                    <p class="din-font-head color-white pb-3"><?php the_sub_field( 'name' ); ?></p>
                                    <div class="din-font color-white">
                                        <p>
                                         <?php the_sub_field( 'text' ); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <?php // no layouts found ?>
<?php endif; ?>