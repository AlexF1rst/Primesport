<?
include "connect.php";

$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM news ");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];

$ran = rand(0, $posts-3);

$result = mysql_query("SELECT * FROM news  ORDER BY id DESC LIMIT $ran, 3");

if (!$result)
{
    echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору. <br> <strong>Код ошибки:</strong></p>";
    exit(mysql_error());
}




?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title>Новости</title>


    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <? include 'head.php';?>
</head>

<body>

<!-- ######################## Main Menu ######################## -->



<!-- ######################## Header (featured posts) ######################## -->

<a href="index.html">
    <div class="home"><i class="fa fa-home"></i></div>
</a>

<header>



    <div class="row">

        <h1>Популярные новости</h1>

        <?
        if (mysql_num_rows($result) > 0)

        {
        $myrow = mysql_fetch_array($result);

        do
        {?>
        <article class="four columns featured_post">

            <a href="news.php?id=<?=$myrow['id']?>"> <h3><?=$myrow["title"]?> </h3></a>
            <a href="news.php?id=<?=$myrow['id']?>" class="th"><img src="assets/img/news/<?=$myrow["image"]?>" alt="desc" style="width:100%" /></a>
            <p> <?=$myrow["text"]?> </p>



        </article>
        <?} while ($myrow = mysql_fetch_array($result));} mysql_close();?>







    </div>

</header>

<!-- ######################## Section ######################## -->

<section>

    <div class="section_main">

        <div class="row">

            <section class="eight columns">

                <h2>Последние новости</h2>
                <?

                include "connect.php";

                $page = $_GET['page'];
                $result00 = mysql_query("SELECT COUNT(*) FROM news ");
                $temp = mysql_fetch_array($result00);
                $posts = $temp[0];


                $num = 3;

                $total = (($posts - 1) / $num) + 1;
                $total =  intval($total);
                $page = intval($page);
                if(empty($page) or $page < 0) $page = 1;
                if($page > $total) $page = $total;
                // Вычисляем начиная с какого номера
                // следует выводить сообщения

                $start = $page * $num - $num;

                // Выбираем $num сообщений начиная с номера $start


                $result = mysql_query("SELECT * FROM news  ORDER BY id DESC LIMIT $start, $num");

                if (!$result)
                {
                    echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору. <br> <strong>Код ошибки:</strong></p>";
                    exit(mysql_error());
                }


                if (mysql_num_rows($result) > 0)

                {
                $myrow = mysql_fetch_array($result);

                do
                {?>
                <article class="blog_post">

                    <div class="three columns">
                        <a href="news.php?id=<?=$myrow['id']?>" class="th"><img src="assets/img/news/<?=$myrow["image"]?>" alt="desc" /></a>
                    </div>
                    <div class="nine columns">
                        <a href="news.php?id=<?=$myrow['id']?>"><h3><?=$myrow["title"]?></h3></a>
                        <p> <?=$myrow["text"]?></p>
                    </div>

                </article>
            <?} while ($myrow = mysql_fetch_array($result));}?>
            </section>

            <section class="four columns">
                <h2></h2>
                <div class="panel">
                    <div class="col-lg-4 name">
                        <img class="img-responsive" src="assets/img/pic.png">
                        <br/>
                        <br/>
                        <a href="https://itunes.apple.com/ru/app/prime/id910475830?ls=1&mt=8" target="_blank"><img src="assets/img/as.png"></a>
                        <a href="https://play.google.com/store/apps/details?id=me.fitcloud.app.primesport.android" target="_blank"><img src="assets/img/gp.png"></a>
                    </div>
                </div>
            </section>

        </div>
        <?

        // Проверяем нужны ли стрелки назад
        if ($page != 1) $pervpage = '<a href=?page=1>Первая</a> | <a href=?page='. ($page - 1) .'>Предыдущая</a> | ';
        // Проверяем нужны ли стрелки вперед
        if ($page != $total) $nextpage = ' | <a href=?page='. ($page + 1) .'>Следующая</a> | <a href=?page=' .$total. '>Последняя</a>';

        // Находим две ближайшие станицы с обоих краев, если они есть
        if($page - 5 > 0) $page5left = ' <a href=?page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
        if($page - 4 > 0) $page4left = ' <a href=?page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
        if($page - 3 > 0) $page3left = ' <a href=?page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
        if($page - 2 > 0) $page2left = ' <a href=?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
        if($page - 1 > 0) $page1left = '<a href=?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

        if($page + 5 <= $total) $page5right = ' | <a href=?page='. ($page + 5) .'>'. ($page + 5) .'</a>';
        if($page + 4 <= $total) $page4right = ' | <a href=?page='. ($page + 4) .'>'. ($page + 4) .'</a>';
        if($page + 3 <= $total) $page3right = ' | <a href=?page='. ($page + 3) .'>'. ($page + 3) .'</a>';
        if($page + 2 <= $total) $page2right = ' | <a href=?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
        if($page + 1 <= $total) $page1right = ' | <a href=?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

        if ($total > 1)
        {
        Error_Reporting(E_ALL & ~E_NOTICE);
        $content.= "<div class=\"pstrnav\">";
            $content.=  $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
            $content.=  "</div>";;
        echo $content;
        mysql_close();
        }?>
    </div>

</section>


</body>
</html>




