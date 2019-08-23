<?php
/*
Template Name: Archive
*/

get_header();

$args = array(
    'post_type' => 'realisations',
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
                            <h2 class="title-medium">Nos créations de site internet</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) :
                        $query->the_post();
                    ?>

                    <div class="col-sm-6">
                        <?php
                            $pushID = get_the_id();
                            include 'template-parts/general/push-medium.php' ;
                        ?>
                    </div>

                    <?php endwhile; endif; ?>
                </div>

                <?php include 'template-parts/footer-inner.php' ; ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
