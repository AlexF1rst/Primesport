<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">


        <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>

        <!-- JavaScript -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/paraxify.min.js"></script>

        <script type="text/javascript" src="assets/js/slick.min.js"></script>

    </head>

    <body>

        <!-- Навигация -->
        <? include "modules/header-menu.php"?>

        <!-- Видео 360 -->
        <section id="video360">
            <div class="angle"><div class="fa fa-angle-down"></div></div>
            <iframe src="https://www.youtube.com/embed/5jcw0WtU3wo?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1;mute=1;loop=1;modestbranding=1;rel=0;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </section>

        <!--Описание и мобильное приложение-->
        <section id="about" class="indent-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <img class="center-block" src="assets/img/tel.png">
                        <div class="text-center">
                            <a href="https://itunes.apple.com/ru/app/prime/id910475830?ls=1&mt=8" target="_blank"><img src="assets/img/app-store.png"></a>
                            <a href="https://play.google.com/store/apps/details?id=me.fitcloud.app.primesport.android" target="_blank"><img src="assets/img/google-play.png"></a>
                        </div>

                    </div>
                    <div class="col-md-8 col-xs-12 text-justify">
                        <h1>PRIME</h1>
                        <h1>ВНИМАНИЕ К СЕБЕ</h1>
                        <div class="zigzag"></div>
                        <p> Когда скорость времени с каждым годом набирает невероятные обороты, а дела и заботы окружают плотным кольцом и кажется, что нет даже минутки, чтобы сделать вдох, необходимо сделать паузу, уйти в сторону от суеты. Хочется найти то место, где сможешь уделить внимание себе, никуда не спешить, лишь наслаждаться моментом. Где не нужно никому доказывать свое превосходство. И таким волшебным островком среди суеты стал Prime sport&spa – первый в центре города фитнес-клуб с роскошным бассейном, созданный специально для того, чтобы вы могли обратить внимание на себя и собственные ощущения.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Paralax 1-->
        <div class="paraxify paralax-img1 indent-middle"></div>

        <!--Интерьер-->
        <section id="interior" class="indent-middle">
            <div class="container">
            <div class="row text-center">
                <h1>ИНТЕРЬЕР</h1>
                <div class="slider">
                    <?php
                    $dir    = 'assets/img/interior';
                    $scanned_dir = array_diff(scandir($dir,1), array('..', '.'));
                    foreach ($scanned_dir as $value){
                        echo "<div class='text-center'><img class='slider-img' src='assets/img/interior/$value'></div>";
                    }
                    ?>

                </div>
            </div>
        </div>
        </section>

        <!--Особенности-->
        <section id="features" class="indent-middle">
            <div class="container text-center">
                <h1>ГЛАВНОЕ ДЛЯ НАС</h1>
                <div class="row secreted-col">
                    <div class="col-md-4 col-xs-12">
                        <i class="fa fa-coffee"></i>
                        <h3>КОМФОРТ</h3>
                        <p>При создании Prime sport&spa мы ориентировались на европейский исключительный сервис, который наполняет клуб атмосферой позитива и доброжелательности. Мы обратились к самым последним разработкам в мире фитнес и велнес, чтобы занятия спортом были приятными, эффективными, насыщенными.</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <i class="fa fa-heart"></i>
                        <h3>ПОЗНАНИЕ СЕБЯ</h3>
                        <p>В Prime sport&spa вы сможете остановить суету жизни и насладиться каждым движением, почувствовать собственную силу и мощь, напряжением и приятным растяжением мышц, страстью танца и негой расслабления. Познать себя, ощутить саму суть жизни здесь и сейчас, в Prime sport&spa.</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3>ВДОХНОВЕНИЕ</h3>
                        <p>Мы много путешествовали, чтобы найти вдохновение для  создания идеального фитнес-клуба, и нашли ответ на свои вопросы в Италии. Эта страна – наполнена светом, солнцем, любовью к каждой минуте жизни, оптимизмом. Мы захотели поделиться с каждым нашим гостем этой неповторимой жизнерадостностью!</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Paralax 2-->
        <div class="paraxify paralax-img3 indent-middle"></div>

        <!-- Клубные карты -->
        <section id="club-cards" class="indent-middle" >
            <div class="container text-center">
                <h1>КЛУБНЫЕ КАРТЫ</h1>
                <div class="row">
                    <div class="col-md-4 col-xs-8 col-xs-offset-2">
                        <h3>COMFORT</h3>
                        <p><img class="card" src="assets/img/cards/card1.png"></p>
                        <p>Для тех, кто любит тренироваться утром и днем и ценит выгодные предложения.</p>
                    </div>
                    <div class="col-md-4 col-xs-8 col-xs-offset-2">
                        <h3>PRIME VIP</h3>
                        <p><img class="card" src="assets/img/cards/card2.png"></p>
                        <p>Парковочное место на время пребывания в клубе, отдельная рецепция и раздевалка, ряд бонусов и привилегий.</p>
                    </div>
                    <div class="col-md-4 col-xs-8 col-xs-offset-2">
                        <h3>INDIVIDUALE</h3>
                        <p><img class="card" src="assets/img/cards/card3.png"></p>
                        <p>Неограниченное посещение всех зон клуба: тренажерный зал, групповые программы, бассейн, хаммам, джакузи, 12 месяцев фитнеса, 60 дней заморозки, 3 гостевых визита, 1 консультация фитнес-врача.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Расписание -->
        <section id="timetable" class="indent-middle">
            <div class="container text-center">
                <h1>РАСПИСАНИЕ</h1>
                <div class="row secreted-col ">
                    <a href="http://primesport.pro/assets/files/general.pdf" target="_blank">
                        <div class="col-md-4 col-xs-4">
                            <p><img src="assets/img/timetable/people.png"></p>
                            <h3>ВЗРОСЛЫЕ</h3>
                        </div>
                    </a>
                    <a href="http://primesport.pro/assets/files/teenagers.pdf" target="_blank" class="link">
                        <div class="col-md-4 col-xs-4">
                            <p><img src="assets/img/timetable/teen.png"></p>
                            <h3>ПОДРОСТКИ</h3>
                        </div>
                    </a>
                    <a href="http://primesport.pro/assets/files/kids.pdf" target="_blank" class="link">
                        <div class="col-md-4 col-xs-4">
                            <p><img src="assets/img/timetable/child.png"></p>
                            <h3>ДЕТИ</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!--Paralax 3-->
        <div class="paraxify paralax-img7 indent-middle"></div>

        <!--Отзывы-->
        <section id="reviews" class="indent-middle">
            <div class="container">
                <div class="row text-center">
                    <h1>ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h1>
                    <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="item active">
                                    <h3>АЛЕКСЕЙ ФОМЕНКО</h3>
                                    <p>Однозначно советую Prime всем, кто хочет прийти в хорошую форму, я успеваю в тренажерку до работы, спасибо, что расписание работы клуба позволяет! Очень нравится интерьер, в помещении приятно находиться, работники очень душевные, да и настоящие мастера. Я очень доволен! </p>
                                    <p><img class="img-circle" src="assets/img/reviews/pic-t1.jpg"></p>
                                </div>

                                <div class="item">
                                    <h3>ЗАЙЦЕВ ДМИТРИЙ</h3>
                                    <p>Отличное место, ходим с супругой в тренажерный зал несколько месяцев, всегда чисто, все продумано, хорошая атмосфера. Не пожалели, что выбрали именно этот фитнес клуб! </p>
                                    <p><img class="img-circle" src="assets/img/reviews/pic-t2.jpg"></p>
                                </div>

                                <div class="item">
                                    <h3>ТИМОФЕЕВА ВИОЛЕТТА</h3>
                                    <p>Я вожу свою сестру в детский клуб, цены не кусаются, плюс, всегда уверена, что с ней все будет в порядке. В свободное время тоже захожу в спа салон, высочайшее качество, а гидромассажный бассейн - просто моя любовь))</p>
                                    <p><img class="img-circle" src="assets/img/reviews/pic-t3.jpg"></p>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Контакты-->
        <? include "modules/footer.php" ?>

        <script>
            $(document).ready(function(){
                checkNav();

                myParaxify = paraxify('.paraxify',{speed:1});

                $('.carousel').carousel({
                    interval: 5000
                });

                $('.slider').slick({
                    accessibility:true,
                    adaptiveHeight:true,
                    arrows:false,
                    dots: true,
                    infinite: false,
                    speed: 300,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });

            $(window).scroll(function(){
                checkNav();
            });

            function checkNav() {
                if ($(window).scrollTop() > $(window).height()-20) {
                    $('.navbar').addClass('navbar-inverse');
                    $('.navbar').removeClass('navbar-transparent');
                }
                else {
                    $('.navbar').removeClass('navbar-inverse');
                    $('.navbar').addClass('navbar-transparent');
                }
            }
        </script>
    </body>
</html>