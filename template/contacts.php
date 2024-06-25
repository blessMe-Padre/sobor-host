<?php
/*
Template Name: Шаблон "Контакты"
*/
get_header();
?>

<main>
    <div class="container">
        <h1 class="title mtb-40px"><?php the_title(); ?></h1>

        <div class="contact__wrapper">
            <ul class="contact__list relative z-19">
                <li>
                    <h2>Адрес:</h2>
                    <p>690091 Россия, Приморский край, г. Владивосток, Океанский проспект, 44 (Покровский парк)</p>
                </li>
                <li>
                    <h2>Телефон:</h2>
                    <a class="link" href="tel:+74232402628">8 (423) 2-40-26-28</a>
                    <br>
                    <a class="link" href="tel:+79502974543">+7 950 297-45-43</a>
                </li>
                <li>
                    <h2>Email:</h2>
                    <a class="link" href="mailto:1@храм-покров.рф">1@храм-покров.рф</a>
                </li>
            </ul>

            <div class="contact__form  relative z-19">
                <h2 class="mb-3">Контактная форма</h2>
                <?php echo do_shortcode('[contact-form-7 id="790e666" title="Контактная форма 1"]'); ?>
            </div>

        </div>


        
        <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/?ll=131.889500%2C43.124597&mode=search&oid=1111818362&ol=biz&z=17.05" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </div>
</main>

<?php get_footer(); ?>