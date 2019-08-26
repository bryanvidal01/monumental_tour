<?php
/*
Template Name: Contact
*/

get_header();

the_post();

$partenaires = get_field('partners');

?>
    <div class="content-site contact" style="background-image: url('https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="title-page">
                        Contact
                    </div>
                </div>
            </div>
            <div class="container-contact">
                <div class="label-contact">
                    Informations du projet
                </div>
                <a href="mailto:information@monumental-tour.fr" class="title-medium-contact-mail">
                    information@monumental-tour.fr
                </a>

                <div class="label-contact">
                    Contact partenaires
                </div>
                <a href="mailto:information@monumental-tour.fr" class="title-medium-contact-mail">
                    partners@monumental-tour.fr
            </div>
            </div>
        </div>
    </div>


<?php
get_footer();
