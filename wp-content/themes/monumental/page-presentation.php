<?php
/*
Template Name: Présentation
*/

get_header();

the_post();

$imagesPortrait = get_field('image_presentation');

if($imagesPortrait != null):
    $imagesPortraitURL = lsd_get_thumb($imagesPortrait, 'presentationPortraitSize');
endif;

$imagesPaysage = get_field('image_preview_video');

if($imagesPaysage != null):
    $imagesPaysageURL = lsd_get_thumb($imagesPaysage, 'presentationPaysageSize');
endif;

$titleDescription = get_field('title_description');
$descriptionProject = get_field('description_project');
$youtubeUrl = get_field('youtube_url');

if($youtubeUrl):
    parse_str( parse_url( $youtubeUrl, PHP_URL_QUERY ), $youtubeUrl );
endif;


$artistes = get_field('artistes');


?>
<div class="content-site">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-page">
                    Présentation
                </div>
            </div>
        </div>
        <div class="row galerie-container">
            <div class="col-sm-5">
                <?php if(isset($imagesPortraitURL) && $imagesPortraitURL != null): ?>
                    <img src="<?php echo $imagesPortraitURL; ?>" width="100%" class="full-mobile" alt="">
                <?php endif; ?>
            </div>
            <div class="col-sm-7">
                <div class="text-project">
                    <?php if($titleDescription): ?>
                        <h2 class="title-second">
                            <?php echo $titleDescription; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if($descriptionProject): ?>
                        <?php echo $descriptionProject; ?>
                    <?php endif; ?>

                    <a href="" class="button gradient">
                        Faire un don
                    </a>
                </div>


                <div class="container-video<?php echo ( isset($youtubeUrl['v']) )? ' has_video' : ''; ?>"  <?php echo ( isset($youtubeUrl['v']) ) ? 'data-video="' . $youtubeUrl['v'] . '"'  : ""; ?>>
                    <?php if(isset($imagesPaysageURL) && $imagesPaysageURL != null): ?>
                        <img src="<?php echo $imagesPaysageURL; ?>" width="100%" alt="">
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <?php if(!empty($artistes)): ?>
        <div class="row galerie-container end-mobile">
            <div class="col-sm-12 text-center">
                <h2 class="title-second">
                    Les artistes
                </h2>
            </div>

            <?php
                foreach ($artistes as $artiste):

                $imageArtiste = $artiste['image_artiste'];

                if(!empty($imageArtiste)):
                    $imageArtisteURL = lsd_get_thumb($imageArtiste, 'galerieSize');
                endif;
                $nameArtiste = $artiste['name_artiste'];
                $descriptionArtiste = $artiste['description_artiste'];
                $urlArtiste = $artiste['url_artiste_site'];
            ?>

                <div class="col-sm-6">
                    <div class="row presta-item">
                        <div class="col-sm-6">
                            <div class="image-presta">
                                <?php if(isset($imageArtisteURL)): ?>
                                    <img src="<?php echo $imageArtisteURL; ?>" alt="">
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
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();
