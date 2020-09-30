<?php
$dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
?>
<script>
    function nowday() {
        <?php
        $sql = "SELECT * FROM user.page where id=1";
        $res = $dbh->query($sql);
        foreach ($res as $value) {
            $count = $value["day_count"];
        }
        $sql = null;
        ?>

        var hiduke = new Date();
        document.getElementById("month").innerHTML = hiduke.getMonth() + 1;
        document.getElementById("day").innerHTML = hiduke.getDate() + <?php echo $count; ?>;

    }
</script>
<script>
    function chenge_day(<?php $num ?>) {
        <?php
        if ($num == 0) {
            // var day = document.getElementById("day").textContent;
            // // day = Number(day) - 1;
            // // document.getElementById("print").innerHTML = String(day);
            // alert(day);
            // document.getElementById("print").innerHTML = day;


            $count = $count - 1;
            $sql = "UPDATE `user`.`page` SET `day_count` = '$count' WHERE (`id` = '1')";
            // $sql = "UPDATE user.page SET day_count = " . $count . " where id = 1";
            $res = $dbh->query($sql);
            // echo '<script type="text/javascript">window.location.reload();</script>';
            $sql = null;
            $res = null;
        } else if ($num == 1) {
            // var day = document.getElementById("day").textContent;
            // day = Number(day) + 1;
            // // document.getElementById("print").innerHTML = String(day);
            // document.getElementById("print").innerHTML = day;

            $count = $count + 1;
            $sql = "UPDATE `user`.`page` SET `day_count` = '$count' WHERE (`id` = '1')";
            // $sql = "UPDATE user.page SET day_count = " . $count . " where id = 1";
            $res = $dbh->query($sql);
            // echo '<script type="text/javascript">window.location.reload();</script>';
            $sql = null;
            $res = null;
        }
        ?>

    }
</script>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day</title>
    <link rel="stylesheet" href="../css/day.css?<?= uniqid() ?>">
</head>

<body onload="nowday()">
    <!-- <button type="button" onclick="beforeday()">前日</button> -->
    <a href="day.php?<?= uniqid() ?>" class="button" onclick="chenge_day(0)">前日</a>
    <span class="date" id="month"></span>
    <span class="date">月</span>
    <span class="date" id="day"></span>
    <span class="date">日</span>

    <span class="date" id="month1"></span>
    <span class="date">月</span>
    <span class="date" id="day1"></span>
    <span class="date">日</span>


    <!-- <button type="button" onclick="nextday()">次日</button> -->
    <a href="day.php?<?= uniqid() ?>" class="button" onclick="chenge_day(1)">次日</a>
</body>

</html>