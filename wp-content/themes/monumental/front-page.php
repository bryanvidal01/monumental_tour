<?php
/*
Template Name: Homepage
*/

get_header();

$dates = get_field('date_homepage');

?>

<div class="container-homepage">
    <div class="left-part" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/visuel_monumental_HD_no-text.jpg')">

    </div>

    <div class="right-part">
        <div class="background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background-right.jpg')"></div>

        <div class="top-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/claim.png" class="claim" alt="">

            <h1 class="title-big">
                Monumental <br/>
                Tour
            </h1>
            <h2 class="title-medium">
                L’électro au service du Patrimoine
            </h2>
        </div>

        <?php if(!empty($dates) && $dates != null): ?>
        <div class="bottom-content">

            <?php foreach ($dates as $date): ?>
                <div class="item-date">
                    <?php if(isset($date['date'])): ?>
                    <div class="date">
                        <?php echo $date['date']; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(isset($date['location'])): ?>
                    <div class="location">
                        <?php echo $date['location']; ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>


            <a href="" class="button gradient">
                Infos & invitations
            </a>

            <div class="sup-info">
                Nouvelles dates annoncées prochainement
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
