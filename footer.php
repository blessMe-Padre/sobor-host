<footer class="footer relative z-50" data-scroll>
    <h2 class="visually-hidden">Контакты</h2>
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__item">
                <img class="footer__logo" src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" width="367"
                    height="105" alt="храм">
                <p class="uppercase text-brown hidden xs:block">
                    © <span class="data-span"></span> Храм Покрова Пресвятой Богородицы
                </p>
            </div>

            <?php wp_nav_menu([
                'theme_location' => 'main',
                'container' => '',
                'menu_class' => 'footer__list',
                'menu_id' => ''
            ]);
            ?>

            <div class="footer__contact">
                <div class="flex xs:flex-col">
                    <p class="font-bold">г. Владивосток,</p>
                    <p class="font-bold"> Океанский проспект, 44</p>
                </div>
                <div class="mb-5">Пн-Сб: 08:00 - 19:00</div>

                <div class="flex xs:flex-col">
                    <p class="mb-5 font-bold"><a class="link" href="tel:+8 (423) 2-40-26-28">8 (423) 2-40-26-28</a></p>
                    <p class="mb-5 font-bold"><a class="link" href="mailto:1@храм-покров.рф">1@храм-покров.рф</a></p>
                </div>

                <div class="flex items-center gap-5">
                    <a class="social-icon" href="http://t.me/pokrovadv/37" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/telegram.svg" width="22"
                            height="22" alt="телеграм">
                    </a>
                    <a class="social-icon" href="https://vk.com/pokrovadv" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/vk.svg" width="24"
                            height="24" alt="вконтакте">
                    </a>
                </div>
            </div>

            <p class="uppercase text-xs text-brown xs:hidden data-mobile-1">
                © <span class="data-span"></span> Храм Покрова Пресвятой Богородицы
            </p>
        </div>

    </div>
</footer>
</div>


<?php wp_footer(); ?>

</body>

</html>