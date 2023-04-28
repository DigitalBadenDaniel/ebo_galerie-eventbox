<div class="block" data-aos="fade-up" data-aos-duration="1500">
    <div class="py-6 h-100" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/timeline-bg-2.jpg'); background-size:cover;">
        <div class="container h-100">
            <div class="row">
                <div class="col-lg-10 offset-lg-2">

                
            <?php if (have_rows('timeline')) : ?>
                <?php $i = 1; ?>
                <?php while (have_rows('timeline')) : the_row(); ?>
                    <?php if ($i % 2 == 0) : ?>
                        <div class="row flex-row align-items-stretch">
                            <div class="col-lg-4 order-lg-1 order-2" data-aos="zoom-in" data-aos-duration="1500">
                                <p class="mb-5"><?php the_sub_field('beschreibung'); ?></p>
                            </div>
                            <div class="col-lg-1 col-3 d-none d-lg-block pr-0 order-lg-2">
                                <center><div class="bg-color-1" style="position:absolute; left:calc(50% - 17px); border-radius:50%; width:44px; height:44px; top:-5px; z-index: 2" data-aos="zoom-in"></div></center>
                                <div data-aos="fade-down" class="bg-color-9" style="width:10px; height:120%; margin: auto; border-radius: 10px; position: relative; margin-top:-10px; z-index: 1"></div>
                            </div>

                            <div class="col-lg-4 pl-0 order-1 order-lg-3" data-aos="zoom-in" data-aos-duration="1500">
                                <div class="h3 pt-1 text-left"><?php the_sub_field('jahr'); ?></p></div>
                            </div>
                        </div>


                    <?php else : ?>
                        <div class="row flex-row align-items-stretch">
                            <div class="col-lg-4 pl-0" data-aos="zoom-in" data-aos-duration="1500">
                                <div class="h3 pt-1 text-lg-right text-left"><?php the_sub_field('jahr'); ?></p></div>
                            </div>
                            <div class="col-lg-1 d-none d-lg-block col-3 pr-0">
                                <center><div class="bg-color-1" style="position:absolute; left:calc(50% - 17px); border-radius:50%; width:44px; height:44px; top:-10px; z-index: 2" data-aos="zoom-in"></div></center>
                                <div data-aos="fade-down" class="bg-color-9" style="width:10px; height:120%; margin: auto; border-radius: 10px; position: relative; margin-top:-10px; z-index: 1"></div>
                            </div>
                            <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="1500">
                                <p class="mb-5"><?php the_sub_field('beschreibung'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
             <?php $i++; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
</div>






