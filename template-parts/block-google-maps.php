<?php
if (get_sub_field('ohne-abstand') == 1) :
    $blockMargin = "m-0";
else :
    $blockMargin = "block";
endif;
?>
<div class="<?php echo '$blockMargin'; ?>" data-aos="fade-up" data-aos-duration="1500">
    <div class="overflow-hidden">
        <a href="https://goo.gl/maps/8esBG5wKXTHukveE8" target="blank"><img class="w-100 img-hover" src="<?php echo get_template_directory_uri(); ?>/assets/img/google-maps.jpg"></a>
    </div>
</div>