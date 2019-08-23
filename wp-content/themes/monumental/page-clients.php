<?php
/*
Template Name: Clients
*/

get_header();

the_post();

$imageHead = get_field('top_image_bg');
$imageHeadURL = lsd_get_thumb($imageHead, 'head-page');

$clients = get_field('clients');


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
                            <h2 class="title-medium">Nos clients</h2>
                            <div class="description-text">
                                <?php echo get_the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php foreach ($clients as $client):
                        $clientImage = $client['client_image'];
                        $clientImageURL = lsd_get_thumb($clientImage, 'medium');
                    ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="push-client">
                            <img src="<?php echo $clientImageURL; ?>" class="image-client" alt="Logo du client <?php echo $client['client_name']; ?>">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <?php include 'template-parts/footer-inner.php' ; ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
