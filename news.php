<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- JavaScript -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

</head>

<body>

    <? include "modules/header-menu.php"?>

    <section id="popular-news" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1-5 col-md-9">
                    <h1>ПОПУЛЯРНЫЕ НОВОСТИ</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1-5 col-md-3">
                    <h3>Каникулярный клуб дневного пребывания!</h3>
                    <div><img src="assets/img/news/1.jpg" class="img-popular-news"></div>
                    <p class="text-justify">На время летних каникул с 29 мая по 31 августа (кроме выходных) приглашаем детей 6-11 лет в Каникулярный клуб дневного пребывания! Время работы с 9:00 до 17:30!</p>
                </div>
                <div class="col-md-3">
                    <h3>Первая вечеринка PRIME Party!</h3>
                    <div><img src="assets/img/news/2.jpg" class="img-popular-news"></div>
                    <p class="text-justify">8 июня состоялась первая летняя вечеринка PRIME. Изысканные закуски от ресторана @st_tropez_poolcafe и самая уютная компания. Фооточет уже на нашей странице Facebook.</p>
                </div>
                <div class="col-md-3">
                    <h3>9 апреля детские соревнования по плаванию</h3>
                    <div><img src="assets/img/news/3.jpg" class="img-popular-news"></div>
                    <p class="text-justify">Дорогие гости! 9 апреля состоятся детские соревнования по плаванию. Приглашаем к участию детей от 4 до 15 лет.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1-5 col-md-9">
                    <h1>ПОСЛЕДНИЕ НОВОСТИ</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1-5 col-md-6">
                    <!-- Отдельная новость-->
                    <div class="row news">
                        <div class="col-md-4">
                            <div><img src="assets/img/news/4.jpg" class="img-news"></div>
                        </div>
                        <div class="col-md-8 text-justify">
                            <h3>SKILL MILL с Ариной Бессаловой!</h3>
                            <p>Каждый понедельник в 18:00 и среду в 20:00. Вас ждет невероятно азартная тренировка, направленная на развитие ловкости, координации, развития кардиореспираторной системы.</p>
                        </div>
                    </div>
                    <!-- Отдельная новость-->
                    <div class="row news">
                        <div class="col-md-4">
                            <div><img src="assets/img/news/5.jpg" class="img-news"></div>
                        </div>
                        <div class="col-md-8 text-justify">
                            <h3>Гости PRIME Running</h3>
                            <p>Команда PRIME Running знает, как правильно провести утро субботы! В субботу в гостях был Александр Степанов, который поделился историей своих достижений в спорте.</p>
                        </div>
                    </div>
                    <!-- Отдельная новость-->
                    <div class="row news">
                        <div class="col-md-4">
                            <div><img src="assets/img/news/6.jpg" class="img-news"></div>
                        </div>
                        <div class="col-md-8 text-justify">
                            <h3>Бал PRIME</h3>
                            <p>22 декабря состоялось грандиозное событие императорский Бал PRIME. Гости вечера окунулись в атмосферу русского бала XIX века, кружили в вальсе, танцевали кадриль и полонез.</p>
                        </div>
                    </div>

                    <div class="row text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 gray-bg-border">
                    <p><img class="center-block" src="assets/img/tel.png"></p>
                    <div class="text-center">
                        <p><a href="https://itunes.apple.com/ru/app/prime/id910475830?ls=1&mt=8" target="_blank"><img src="assets/img/app-store.png"></a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=me.fitcloud.app.primesport.android" target="_blank"><img src="assets/img/google-play.png"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <? include "modules/footer.php" ?>
</body>