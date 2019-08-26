<?php
/*
Template Name: Partenaires
*/

get_header();

the_post();

$partenaires = get_field('partners');

?>
<div class="content-site">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-page">
                    Partenaires
                </div>
            </div>
        </div>
        <div class="row galerie-container">
            <?php
            foreach ($partenaires as $partenaire):

                $imagePartner = $partenaire['image_artiste'];

                if(!empty($imagePartner)):
                    $imagePartenaireURL = lsd_get_thumb($imagePartner, 'galerieSize');
                endif;
                $nameArtiste = $partenaire['name_artiste'];
                $descriptionArtiste = $partenaire['description_artiste'];
                $urlArtiste = $partenaire['url_artiste_site'];
                ?>

                <div class="col-sm-6">
                    <div class="row presta-item">
                        <div class="col-sm-6">
                            <div class="image-presta">
                                <?php if(isset($imagePartenaireURL)): ?>
                                    <img src="<?php echo $imagePartenaireURL; ?>" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-6 no-height">
                            <div class="text-presta">
                                <div class="contain-text">
                                    <?php if($nameArtiste): ?>
                                        <div class="title-little">
                                            <?php echo $nameArtiste; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($descriptionArtiste): ?>
                                        <p>
                                            <?php echo $descriptionArtiste; ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if($urlArtiste) : ?>
                                        <a href="<?php echo $urlArtiste; ?>" class="link">
                                            En savoir plus
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php
get_footer();
