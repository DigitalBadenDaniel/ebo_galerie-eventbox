<?php
    $rowClass = "";
    $ratio = "";
    $image = get_sub_field('image');
    $width = get_sub_field('width') ? get_sub_field('width') : 'content';
    switch ($width) {
        case "fullwidth":
            $rowClass = "col-12";
            $ratio = "1_2";
            break;
        case "wide":
            $rowClass = "col-12 offset-lg-1 col-lg-11";
            $ratio = "3_1";
            break;
        default: // content
            $rowClass = "col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8";
            $ratio = "16_9";
    }
?>

<section class="block block-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="row">
                    <div class="<?= $rowClass ?>">
                        <div class="text-center">
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="images">
                                <?= wp_get_attachment_image(get_sub_field('image')['id'], $ratio, false, ['class' => 'w-100 h-auto']) ?>
                            </a>
                            <div class="my-2"><?php echo esc_attr($image['caption']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>