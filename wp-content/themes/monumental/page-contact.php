<?php
/*
Template Name: Contact
*/

get_header();

the_post();

$partenaires = get_field('contacts');

?>
    <div class="content-site contact" style="background-image: url('https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="title-page">
                        Contacts
                    </div>
                </div>
            </div>

            <?php if(!empty($partenaires) && $partenaires): ?>

            <div class="container-contact">

                <?php foreach ($partenaires as $partenaire):
                $label = $partenaire['label_contact'];
                $email = $partenaire['email_contact'];
                ?>
                <div class="label-contact">
                    <?php echo $label; ?>
                </div>
                <a href="mailto:<?php echo $email; ?>" class="title-medium-contact-mail">
                    <?php echo $email; ?>
                </a>
                <?php endforeach;?>
            </div>
        </div>
        <?php endif; ?>
    </div>


<?php
get_footer();
