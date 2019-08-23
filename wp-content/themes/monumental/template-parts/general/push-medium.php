<?php
$titlePushRight = get_the_title($pushID);
$shortDescrRight = get_field('short_description', $pushID);
$mission = get_field('mission', $pushID);

$imageBackground = get_field('image_background', $pushID);
$imageBackground = lsd_get_thumb($imageBackground, 'push-client');

$animHover = array('', '2','3','4','5');

$randAnim = array_rand($animHover);

?>

<div class="push-medium push-video">
    <div class="image-container">

        <div class="glitch glitch--style<?php echo $animHover[$randAnim]; ?>">
            <div class="glitch__img" style="background-image: url('<?php echo $imageBackground; ?>');"></div>
            <div class="glitch__img" style="background-image: url('<?php echo $imageBackground; ?>');"></div>
            <div class="glitch__img" style="background-image: url('<?php echo $imageBackground; ?>');"></div>
            <div class="glitch__img" style="background-image: url('<?php echo $imageBackground; ?>');"></div>
            <div class="glitch__img" style="background-image: url('<?php echo $imageBackground; ?>');"></div>
        </div>

        <div class="legend">
            <h4 class="project-category">
                <?php echo $mission; ?>
            </h4>
        </div>

    </div>

    <div class="content">
        <div class="content-text">
            <div class="title-background">
                <?php echo $titlePushRight; ?>
            </div>
            <div class="description-text">
                <?php echo $shortDescrRight; ?>
            </div>

            <a href="<?php echo get_the_permalink($pushID); ?>" class="link">
                Voir le projet
            </a>
        </div>
    </div>
</div>
