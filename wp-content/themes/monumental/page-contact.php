<?php
/*
Template Name: Contact
*/

get_header();

the_post();

$imageHead = get_field('top_image_bg');
$imageHeadURL = lsd_get_thumb($imageHead, 'head-page');



?>

<div class="intro-page" style="background-image: url('<?php echo $imageHeadURL; ?>'); ">

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="container-all">
                <div class="strate-intro">
                    <div class="row">
                        <div class="col-sm-8 mx-auto text-center">
                            <h2 class="title-medium">Nous contacter</h2>
                            <div class="description-text">
                                <?php echo get_the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 mx-auto">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="first-name" placeholder="Votre nom *">
                            </div>
                            <div class="col-sm-6">
                                <input name="email" placeholder="Votre email *">
                            </div>
                            <div class="col-sm-6">
                                <input name="society" placeholder="Nom de la société">
                            </div>
                            <div class="col-sm-6">
                                <input name="phone" placeholder="Votre numéro de téléphone">
                            </div>
                            <div class="col-sm-12">
                                <textarea placeholder="Votre message *"></textarea>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="button white">
                                    Envoyer le message
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="description-text text-center">
                        <?php echo get_field('contact_info'); ?>
                    </div>
                </div>


                <?php include 'template-parts/footer-inner.php' ; ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
