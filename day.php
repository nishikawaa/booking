<?php
function now()
{
    $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
    $sql = "SELECT * FROM user.page where id=1";
    $res = $dbh->query($sql);
    foreach ($res as $value) {
        $count = $value["day_count"];
    }
    $sql = null;
    return $count;
}

function month()
{
    $month = date("m");
    print($month);
}

function day($count)
{
    $day = date("d");
    print($day + $count);
}


$count = now();

if (isset($_POST['before'])) {
    //前日ボタン押下
    $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
    $count = $count - 1;
    $sql = "UPDATE `user`.`page` SET `day_count` = '$count' WHERE (`id` = '1')";
    // $sql = "UPDATE user.page SET day_count = " . $count . " where id = 1";
    $res = $dbh->query($sql);
    // echo '<script type="text/javascript">window.location.reload();</script>';
    $sql = null;
    $res = null;
} else if (isset($_POST['next'])) {
    //次日ボタン押下
    $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
    $count = $count + 1;
    $sql = "UPDATE `user`.`page` SET `day_count` = '$count' WHERE (`id` = '1')";
    // $sql = "UPDATE user.page SET day_count = " . $count . " where id = 1";
    $res = $dbh->query($sql);
    // echo '<script type="text/javascript">window.location.reload();</script>';
    $sql = null;
    $res = null;
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day</title>
    <link rel="stylesheet" href="../css/day.css?<?= uniqid() ?>">
</head>

<!-- <body onload="nowday()"> -->

<body>
    <?php $count = now(); ?>

    <form action="day.php" method="POST">
        <form action="timeschedule.php" method="POST">
            <button type="submit" name="before">前日</button>
            <span class="date"><?php month(); ?></span>
            <span class="date">月</span>
            <span class="date"><?php day($count); ?></span>
            <span class="date">日</span>
            <button type="submit" name="next">次日</button>
        </form>
    </form>
</body>

</html>