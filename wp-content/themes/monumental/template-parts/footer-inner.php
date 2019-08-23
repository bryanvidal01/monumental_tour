<div class="container-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mx-auto text-center">
                <?php if(get_the_id() != CONTACT): ?>
                <div class="title-medium">
                    Vous avez dit orizon ?
                </div>
                <p class="description-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur commodi cumque exercitationem fugiat harum iusto neque sunt velit voluptatibus?
                </p>

                <a href="<?php echo get_the_permalink(CONTACT); ?>" class="button black">
                    Contact
                </a>
                <?php endif; ?>

                <p class="mentions">
                    ® Copyright Orizon | Tous droits résérvés
                </p>
            </div>
        </div>
    </div>
</div>

