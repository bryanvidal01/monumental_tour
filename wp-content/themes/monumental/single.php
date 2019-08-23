<?php

get_header();

the_post();

$mission = get_field('mission');
$location = get_field('effectue_chez');
$url = get_field('url_website');

$nextPost = get_next_post();
$previousPost = get_previous_post();

$imageBackground = get_field('image_background');
$imageBackground = lsd_get_thumb($imageBackground, 'background');

$imageLogo = get_field('client_logo');
$imageLogo = lsd_get_thumb($imageLogo, 'client-logo');


?>

    <div class="intro-page" style="background-image: url(<?php echo $imageBackground; ?>); ">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-all">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="ariane">
                                <li>
                                    <a href="<?php echo get_site_url(); ?>">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Archive
                                    </a>
                                </li>
                                <li>
                                    <span>
                                        <?php echo get_the_title(); ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="content-single">

                                <h2 class="title-big">
                                    <?php echo get_the_title(); ?>
                                </h2>
                                <p>
                                    <?php echo get_the_content(); ?>
                                </p>

                                <?php if($url != ''): ?>
                                    <a class="button black" href="<?php echo $url; ?>" target="_blank">Voir le site</a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <?php if($imageLogo): ?>
                            <div class="container-image-client">
                                <?php if($url != ''): ?>
                                <a href="<?php echo $url; ?>" target="_blank">
                                <?php endif; ?>
                                    <img src="<?php echo $imageLogo; ?>" alt="Logo du client <?php echo get_the_title(); ?>">
                                <?php if($url != ''): ?>
                                </a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 text-right">
                            <?php if(!empty($nextPost)): ?>
                                <a href="<?php echo get_the_permalink($nextPost); ?>" class="button-pagination">
                                    <div class="label">
                                        Article suivant
                                    </div>
                                    <div class="project-name">
                                        <?php echo get_the_title($nextPost); ?>
                                    </div>
                                </a>

                            <?php else: ?>

                                <a href="<?php echo get_site_url(); ?>" class="button-pagination">
                                    <div class="label">
                                        Retourner à la page
                                    </div>
                                    <div class="project-name">
                                        à la page d'accueil
                                    </div>
                                </a>

                            <?php endif; ?>

                        </div>
                        <div class="col-sm-6">
                            <?php if(!empty($previousPost)): ?>
                                <a href="<?php echo get_the_permalink($previousPost); ?>" class="button-pagination">
                                    <div class="label">
                                        Article précédent
                                    </div>
                                    <div class="project-name">
                                        <?php echo get_the_title($previousPost); ?>
                                    </div>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo get_site_url(); ?>" class="button-pagination">
                                    <div class="label">
                                        Retourner à la page
                                    </div>
                                    <div class="project-name">
                                        à la page d'accueil
                                    </div>
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bloc-cta-single">
        <div class="row">
            <div class="col-sm-2">
                <div class="label-cta-single">
                    Nom du client
                </div>
                <h3 class="response">
                    <?php echo get_the_title(); ?>
                </h3>
            </div>

            <?php if($mission != ''): ?>
            <div class="col-sm-2">
                <div class="label-cta-single">
                    Mission
                </div>
                <h3 class="response">
                    <?php echo $mission; ?>
                </h3>
            </div>
            <?php endif; ?>

            <div class="col-sm-5">
                <?php if($location != ''): ?>
                    <div class="label-cta-single">
                        Effectué chez
                    </div>
                    <h3 class="response">
                        <?php echo $location; ?>
                    </h3>
                <?php endif; ?>
            </div>
            <div class="col-sm-3">

                <?php if($url != ''): ?>
                    <a href="<?php echo $url; ?>" target="_blank" class="button gradient">
                        visiter le site
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php
get_footer();
