<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://use.typekit.net/xmq4mgz.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jQuery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.jpg" />

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600,700&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="loader">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_monumental.svg" alt="">
    <i class="loading"></i>
</div>

<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo get_site_url(); ?>" class="link-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_monumental.svg" class="logo" alt="">
                </a>
            </div>

            <div class="menu-burger">
                <div class="barre"></div>
            </div>

            <div class="col-sm-10">
                <ul class="navigation-principal">
                    <li>
                        <a href="<?php echo get_the_permalink(PRESENTATION); ?>">
                            PRESENTATION
                        </a>
                    </li>
                    <li>
                        <a href="">
                            INVITATIONS
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_the_permalink(GALERIE); ?>">
                            GALERIE
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_the_permalink(PARTNERS); ?>">
                            PARTENAIRES
                        </a>
                    </li>
                    <li>
                        <a href="">
                            CONTACT
                        </a>
                    </li>
                    <li>
                        <a href="" class="button gradient">
                            Faire un don
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
