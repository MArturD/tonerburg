<div class="accept margin-bottom" id="conditions">
    <div class="wrap">
        <div class="accept-wrap">
            <p class="accept-wrap-title heading"><?php echo get_field("accept_title", "options") ?></p>

            <div class="acceptance-conditions">
                <div class="accept-approval">
                    <div class="accept-approval__title subtitle-font"><?php echo get_field("accept_subtitle_one", "options") ?></div>
                    <?php

// Check rows existexists.
if( have_rows('accept_approval') ):

    // Loop through rows.
    while( have_rows('accept_approval') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('accept_approval_description');
        // Do something...
?>
    <p><?php echo $sub_value; ?>fffff</p>

                    <?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
                        ?>ffff<?php
endif;
?>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Новые и в заводской коробке</p>
                    </div>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Официальные и оригинальные</p>
                    </div>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Картриджи до 2020 года включительно.
                            (Старше приобретаем с уценкой)
                        </p>
                    </div>

                </div>
                <div class="accept-rejection">
                    <div class="accept-rejection__title subtitle-font"><?php echo get_field("accept_subtitle_two", "options") ?></div>

                    <?php

                    // Check rows existexists.
                    if( have_rows('accept_approval') ):

                        // Loop through rows.
                        while( have_rows('accept_approval') ) : the_row();

                            // Load sub field value.
                            $sub_value = get_sub_field('accept_approval_description');
                            // Do something...
                            ?>
                            <p><?php echo $sub_value; ?>fffff</p>

                        <?php
                            // End loop.
                        endwhile;

// No value.
                    else :
                        // Do something...
                        ?>ffff<?php
                    endif;
                    ?>

                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Б/У и использованные картриджи</p>
                    </div>
                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Совместимые, подделки и реплики</p>
                    </div>
                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Заправленные и восстановленные</p>
                    </div>
                </div>
            </div>

            <div class="accept-more "><a href="#" class="text-font">Подробные условия приемки и уценки</a></div>

        </div>
    </div>
</div>

