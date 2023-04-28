<?php $bild_footer = get_field( 'bild_footer' ); ?>
<?php if ( $bild_footer ) : ?>
        <div class="
            <?php if (get_field('grauer_hintergrund') == 1) : ?>
                <?php echo 'bg-color-6'; ?>
            <?php else : ?>
                <?php // echo 'false'; ?>
            <?php endif; ?>
        ">
<div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">
    <div class="row">
        <div class="col-6 offset-3 p-0">
            <div class="bg-color-3 hr-height w-100"></div>
        </div>
        <div class="col-3 p-0">
             <div class="bg-color-4 hr-height w-100"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="overflow-hidden">
                <div class="bg-color-2 w-100 h-100" style="position: absolute; opacity: 0.3; top:0; z-index: 2;"> </div>
                <div class="w-25 h-100 bg-color-2" style="position: absolute; opacity: 0.6; top:0; right: 0; z-index: 4;"></div>     
                <img class="img-fluid parallax" src="<?php echo esc_url( $bild_footer['url'] ); ?>">
            </div>
        </div>
    </div>
    <div class="row hr-position-bottom" style="z-index: 3;">
        <div class="col-6 p-0">
            <div class="bg-color-3 hr-height w-100"></div>
        </div>
        <div class="col-3 p-0">
             <div class="bg-color-4 hr-height w-100"></div>
        </div>
    </div>
</div>
</div>
<?php endif; ?>
