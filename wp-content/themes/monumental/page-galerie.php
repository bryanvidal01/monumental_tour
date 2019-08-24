<?php
/*
Template Name: Galerie
*/

get_header();

the_post();

$images = get_field('image_galerie');


?>
<div class="content-site">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-page">
                    Galerie
                </div>
            </div>
        </div>
        <div class="row galerie-container">
            <?php
                foreach ($images as $image):
                    $imageUrl = lsd_get_thumb($image['image'], 'galerieSize');
                    $imageUrlFull = lsd_get_thumb($image['image'], 'full');
            ?>
                <div class="item-galerie">
                    <a href="<?php echo $imageUrlFull; ?>"  data-lightbox="roadtrip">
                        <img src="<?php echo $imageUrl; ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php
get_footer();
