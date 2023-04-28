<section class="block" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="row flex-row align-items-lg-stretch ">
            <?php if (have_rows('box_1')) : ?>
                <?php while (have_rows('box_1')) : the_row(); ?>
                    <?php if (get_sub_field('hervorheben') == 1) : ?>
                        <?php 
                        $background = 'bg-color-2-10';
                        $headline = 'color-1';
                        $price = 'color-2';
                        $buttoncolor = 'btn-eb ';
                        ?>
                    <?php else : ?>
                        <?php 
                        $background = 'bg-white';
                        $headline = 'color-4';
                        $price = 'color-4';
                        $buttoncolor = 'btn-eb-light';
                        ?>
                    <?php endif; ?>
                    <div class="col-lg-4 px-0" data-aos="fade-up" data-aos-duration="1500">
                        <div class="<?php echo $background; ?> h-100 py-5 px-5 text-center vergleichs-border-first">
                            <h3 class="<?php echo $headline; ?>"><?php the_sub_field('headline'); ?></h3>
                            <p class="color-4"> <?php the_sub_field('beschreibung'); ?>
                            </p>
                            <p class="vergleichs-headline <?php echo $price; ?>"><?php the_sub_field('price'); ?></p>
                            <?php if (have_rows('bullet_point')) : ?>
                        <?php while (have_rows('bullet_point')) : the_row(); ?>
                            <div class="my-4">
                                <strong><?php the_sub_field('headline'); ?></strong>
                                <p class="color-4 small"><?php the_sub_field('beschreibung'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found ?>
                    <?php endif; ?>
                            
                            <?php $button = get_sub_field( 'button' ); ?>
					<?php if ( $button ) : ?>
                            <div class="my-4">
                                <a  class="<?php echo $buttoncolor; ?> btn" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
						
					<?php endif; ?>
                            
                        </div>
                    </div>          
                <?php endwhile; ?>
            <?php endif; ?>
            
            <?php if (have_rows('box_2')) : ?>
                <?php while (have_rows('box_2')) : the_row(); ?>
                    <?php if (get_sub_field('hervorheben') == 1) : ?>
                        <?php 
                        $background = 'bg-color-2-10';
                        $headline = 'color-1';
                        $price = 'color-2';
                        $buttoncolor = 'btn-eb ';
                        ?>
                    <?php else : ?>
                        <?php 
                        $background = 'bg-white';
                        $headline = 'color-4';
                        $price = 'color-4';
                        $buttoncolor = 'btn-eb-light';
                        ?>
                    <?php endif; ?>
                    <div class="col-lg-4 px-0" data-aos="fade-up" data-aos-duration="1500">
                        <div class="<?php echo $background; ?> h-100 py-5 px-5 text-center vergleichs-border">
                            <h3 class="<?php echo $headline; ?>"><?php the_sub_field('headline'); ?></h3>
                            <p class="color-4"> <?php the_sub_field('beschreibung'); ?>
                            </p>
                            <p class="vergleichs-headline <?php echo $price; ?>"><?php the_sub_field('price'); ?></p>
                            <?php if (have_rows('bullet_point')) : ?>
                        <?php while (have_rows('bullet_point')) : the_row(); ?>
                            <div class="my-4">
                                <strong><?php the_sub_field('headline'); ?></strong>
                                <p class="color-4 small"><?php the_sub_field('beschreibung'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found ?>
                    <?php endif; ?>
                            
                            <?php $button = get_sub_field( 'button' ); ?>
					<?php if ( $button ) : ?>
                            <div class="my-4">
                                <a  class="<?php echo $buttoncolor; ?> btn" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
						
					<?php endif; ?>
                            
                        </div>
                    </div>          
                <?php endwhile; ?>
            <?php endif; ?>
            
            <?php if (have_rows('box_3')) : ?>
                <?php while (have_rows('box_3')) : the_row(); ?>
                    <?php if (get_sub_field('hervorheben') == 1) : ?>
                        <?php 
                        $background = 'bg-color-2-10';
                        $headline = 'color-1';
                        $price = 'color-2';
                        $buttoncolor = 'btn-eb ';
                        ?>
                    <?php else : ?>
                        <?php 
                        $background = 'bg-white';
                        $headline = 'color-4';
                        $price = 'color-4';
                        $buttoncolor = 'btn-eb-light';
                        ?>
                    <?php endif; ?>
                    <div class="col-lg-4 px-0" data-aos="fade-up" data-aos-duration="1500">
                        <div class="<?php echo $background; ?> h-100 py-5 px-5 text-center vergleichs-border">
                            <h3 class="<?php echo $headline; ?>"><?php the_sub_field('headline'); ?></h3>
                            <p class="color-4"> <?php the_sub_field('beschreibung'); ?>
                            </p>
                            <p class="vergleichs-headline <?php echo $price; ?>"><?php the_sub_field('price'); ?></p>
                            <?php if (have_rows('bullet_point')) : ?>
                        <?php while (have_rows('bullet_point')) : the_row(); ?>
                            <div class="my-4">
                                <strong><?php the_sub_field('headline'); ?></strong>
                                <p class="color-4 small"><?php the_sub_field('beschreibung'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found ?>
                    <?php endif; ?>
                            
                            <?php $button = get_sub_field( 'button' ); ?>
					<?php if ( $button ) : ?>
                            <div class="my-4">
                                <a  class="<?php echo $buttoncolor; ?> btn" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
						
					<?php endif; ?>
                            
                        </div>
                    </div>          
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="my-1 my-lg-2 small"><?php the_sub_field( 'txt_bottom' ); ?></div>
            </div>
        </div>
    </div>
</section>