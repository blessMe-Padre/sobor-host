<?php
/*
Template Name: Требы
*/
get_header();
?>

<!-- <main style="background-color: black;"> -->
<main>
    <div class="container">
        <h1 class="title mtb-40px">Заказать требу</h1>
        <section class="treba-section relative z-19">
            <!-- <h1 class="title mtb-40px">Покровский Кафедральный Собор г.Владивостока. Заказ требы</h1> -->

            <div class="_tabs">
                <!-- <nav class="treba__nav">
                    <button class="treba__btn _tabs-item _active" data-tab="#tab1">Заказать требу</button>
                    <button class="treba__btn _tabs-item" data-tab="#tab2">Поставить свечку</button>
                </nav> -->

                <div class="_tabs-block _active" id="tab1">
                <form class="main-treba-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                    <input type="hidden" name="action" value="submit_form">
                    <div class="treba__wrapper">
                        <div class="treba">
                            <div class="treba__item">
                                <p>Тип требы:</p>
                                <select name="treba-select" id="treba-select" required>
                                    <option value="value1" selected>О здравии</option>
                                    <option value="value2">Об упокоении</option>
                                </select>
                            </div>
                            <div class="treba__item">
                                <p>Название требы:</p>
                                <select  class="_req" name="treba-name-select" id="treba-name-select" required>
                                    <option value="Услуга не выбрана" selected disabled style="display:none">Выберите требу</option>
                                </select>
                            </div>
                            <div class="treba__item">
                                <p>Количество дней:</p>
                                <input  class="_req" name="days-count" id="days-input" min="0" type="number" value="1" required>
                            </div>
                            <div class="treba__item">
                                <p>Имена (каждое с новой строки или через запятую):</p>
                                <textarea  class="_req" name="text" id="textarea-input" required></textarea>
                            </div>
                            <div class="treba__item">
                                <p>Ваше имя:</p>
                                <input class="_req" name="name" type="text">
                            </div>
                            <div class="treba__item">
                                <p>Ваша электронная почта:</p>
                                <input class="_req" type="email" name="email" id="" required>
                            </div>

                            <input class="treba__btn" type="submit" value="Отправить">
                        </div>

                        <div class="rite">
                            <div class="rite__wrapper">
                                <img class="img-rite-top" src="<?php echo get_template_directory_uri() ?>/src/img/treba/top_z.jpg"
                                alt="">
                                <div class="rite__content">
                                    <div>
                                        <p class="rite-content-span"></p>
                                        <ol class="rite-content-name-list"></ol>
                                    </div>
                                    <div class="rite__content-right">
                                        <p>За одно имя: <span class="content-name-count"></span>руб.</p>
                                        <p>Количество дней: <span class="content-days"></span></p>
                                        <p>Итого: <span class="content-total"></span>руб.</p>
                                    </div>
                                </div>
                                <img class="img-rite-bottom" src="<?php echo get_template_directory_uri() ?>/src/img/treba/bottom_z.jpg"
                                alt="">
                            </div>
                        </div>
                        <input id="total-sum" type="hidden" name="total-sum" value="">
                    </form>
                    </div>
                </div>
                <div class="_tabs-block" id="tab2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis aut laboriosam, consectetur voluptatibus ipsum dignissimos? Esse nam rerum commodi nihil?
                </div>
            </div>

        </section>

    </div>
</main>

<?php get_footer(); ?>