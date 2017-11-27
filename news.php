<?
include "db/connect.php";

$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM news ");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];

//$ran = rand(0, $posts-3);
$from = $posts-3;
$result = mysql_query("SELECT * FROM news  ORDER BY id DESC LIMIT $from, $posts");

if (!$result)
{
    echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору. <br> <strong>Код ошибки:</strong></p>";
    exit(mysql_error());
}
?>
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
                <?
                if (mysql_num_rows($result) > 0)

                {
                $myrow = mysql_fetch_array($result);
                $first = true;
                do
                {?>
                    <div class="<?if($first) echo "col-md-offset-1-5"?> col-md-3">
                        <h3><?=$myrow["title"]?></h3>
                        <div><img src="assets/img/news/<?=$myrow["image"]?>" class="img-popular-news"></div>
                        <p class="text-justify"><?=$myrow["text"]?></p>
                    </div>
                <?
                $first=false;
                } while ($myrow = mysql_fetch_array($result));} mysql_close();?>
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
                    <?
                    include "db/connect.php";

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
                        <!-- Отдельная новость-->
                        <div class="row news">
                            <div class="col-md-4">
                                <div><img src="assets/img/news/<?=$myrow["image"]?>" class="img-news"></div>
                            </div>
                            <div class="col-md-8 text-justify">
                                <h3><?=$myrow["title"]?></h3>
                                <p><?=$myrow["text"]?></p>
                            </div>
                        </div>
                    <?} while ($myrow = mysql_fetch_array($result));}?>

                    <div class="row text-center">
                        <ul class="pagination">
                            <?for ($i=1; $i<=$total; $i++){
                                if($i==$page) echo "<li class='active'><a href='?page=$i'>$i</a></li>";
                                else echo "<li><a href='?page=$i'>$i</a></li>";
                            } ?>
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