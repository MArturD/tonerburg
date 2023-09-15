<div class="advantages margin-bottom">
    <div class="wrap">
        <div class="advantages-wrap">
            <p class="advantages-wrap__title heading"><?php echo get_field("advantages_title", "options") ?></p>
            <div class="advantages-cards">
                <?php if( have_rows("advantages") ): ?>


                        <?php while( have_rows('advantages') ): the_row();

                            // переменные
                            $image = get_sub_field('advantages_img');
                            $subtitle = get_sub_field('advantages_subtitle');
                            $description = get_sub_field('advantages_description');

                            ?>


                        <div class="advantages-cards__item">
                            <div class="advantages-cards__img">
                                <img src="<?php echo $image; ?>">
                            </div>

                            <div class="advantages-cards__info">
                                <p class="advantages-cards__title subtitle-font">
                                    <?php echo $subtitle; ?>
                                </p>
                                <p class="advantages-cards__description text-font"><?php echo $description; ?></p>
                            </div>

                        </div>

                        <?php endwhile; ?>

                <?php endif; ?>


<!--                <div class="advantages-cards__item">-->
<!--                    <div class="advantages-cards__img">-->
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/others/advantages1.svg">-->
<!--                    </div>-->
<!---->
<!--                    <div class="advantages-cards__info">-->
<!--                        <p class="advantages-cards__title subtitle-font">-->
<!--                            Освободить-->
<!--                        </p>-->
<!--                        <p class="advantages-cards__description text-font">Место на складе или дома, для ваших новых-->
<!--                            вещей или расходников</p>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
                <div class="advantages-cards__item">
                    <div class="advantages-cards__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/advantages2.svg">
                    </div>
                    <div class="advantages-cards__info">

                        <p class="advantages-cards__title subtitle-font">
                            Заработать
                        </p>
                        <p class="advantages-cards__description text-font">Выгодно,
                            конфиденциально и безопасно, так как все сделки осуществляются квалифицированными
                            специалистами</p>

                    </div>
                </div>
                <div class="advantages-cards__item">
                    <div class="advantages-cards__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/advantages3.svg">
                    </div>
                    <div class="advantages-cards__info">

                        <p class="advantages-cards__title subtitle-font">
                            Сберечь
                        </p>
                        <p class="advantages-cards__description text-font">Экологию и окружающую среду, без лишних
                            проблем с утилизацией</p>

                    </div>
                </div>
                <div class="advantages-cards__item">
                    <div class="advantages-cards__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/advantages4.svg">
                    </div>
                    <div class="advantages-cards__info">

                        <p class="advantages-cards__title subtitle-font">
                            Сэкономить
                        </p>
                        <p class="advantages-cards__description text-font">Время на поиск и продажу, ведь не нужно
                            искать потенциального покупателя</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
