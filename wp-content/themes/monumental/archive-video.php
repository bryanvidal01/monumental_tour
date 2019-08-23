<?php
/*
Template Name: Archive Video
*/

get_header();

$args = array(
    'post_type' => 'videos',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'order_by' => 'date'
);
$query = new WP_Query( $args );


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
                        <div class="col-sm-12 mx-auto text-center">
                            <h2 class="title-medium">Nos réalisations vidéos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i = 0;
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) :
                        $query->the_post();

                        $image = get_field('image_preview');

                        $imageUrl = lsd_get_thumb($image, 'video-push');

                        if($i%2 != 1):
                        ?>
                            <div class="col-sm-12">
                                <a href="<?php echo get_field('video_file'); ?>" class="add-video">
                                    <div class="container-image-video">
                                        <img src="<?php echo $imageUrl; ?>" alt="" width="100%">
                                    </div>
                                </a>
                                <div class="content-video">
                                    <div class="center-y">
                                        <div class="title-background">
                                            <?php echo get_the_title(); ?>
                                        </div>
                                        <a href="<?php echo get_field('video_file'); ?>" class="add-video link-border">
                                            Voir la vidéo
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php else: ?>

                            <div class="col-sm-12">
                                <div class="content-video">
                                    <div class="center-y">
                                        <div class="title-background">
                                            <?php echo get_the_title(); ?>
                                        </div>
                                        <a href="<?php echo get_field('video_file'); ?>" class="add-video link-border">
                                            Voir la vidéo
                                        </a>
                                    </div>
                                </div>

                                    <a href="<?php echo get_field('video_file'); ?>" class="add-video">
                                        <div class="container-image-video">
                                            <img src="<?php echo $imageUrl; ?>" alt="" width="100%">
                                        </div>
                                    </a>

                            </div>


                    <?php endif; $i++;  endwhile; endif; ?>
                </div>

                <?php include 'template-parts/footer-inner.php' ; ?>
            </div>
        </div>
    </div>
</div>


<div class="container-video hidden">

    <div class="close-popin">
        Retour
    </div>
    <video controls width="100%" id="video-single">
        <source src="/media/examples/flower.mp4" type="video/mp4">
    </video>
</div>


<?php
get_footer();
