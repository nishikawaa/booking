<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/timeschedule.css?<?= uniqid() ?>">
</head>

<body>

    <?php
    if (isset($_POST['before'])) {
        //前日ボタン押下
        $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
        $sql1 = "SELECT * FROM user.page where id=1";
        $res1 = $dbh->query($sql1);
        foreach ($res1 as $value1) {
            $count = $value1["day_count"];
        }
        $sql1 = null;

        $sql2 = "SELECT * FROM user.booking WHERE month = date('m') AND day = date('d')+$count";
        $res2 = $dbh->query($sql2);
        foreach ($res2 as $value2) {
            $sh_data = $value2["start_hour"];
            $sm_data = $value2["start_minute"];
            $fh_data = $value2["finish_hour"];
            $fm_data = $value2["finish_minute"];
            $place_data = $value2["place"];
            $title_data = $value2["title"];
            $name_data = $value2["name"];
        }
        print("aiueo");
        $sql = null;
    }
    ?>


    <!-- タイムスケジュール -->
    <table class="table-css">
        <tr>
            <th class="td-css">時間</th>
            <th class="td-css">大阪ー応接室</td>
            <th class="td-css">東京ー応接室</td>
            <th class="td-css">朝礼ZOOM</td>
        </tr>
        <tr>
            <td class="td-css">7:00</td>
            <td class="td-css" id="7:00_1">-</td>
            <td class="td-css" id="7:00_2">-</td>
            <td class="td-css" id="7:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">7:30</td>
            <td class="td-css" id="7:30_1">-</td>
            <td class="td-css" id="7:30_2">-</td>
            <td class="td-css" id="7:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">8:00</td>
            <td class="td-css" id="8:00_1">-</td>
            <td class="td-css" id="8:00_2">-</td>
            <td class="td-css" id="8:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">8:30</td>
            <td class="td-css" id="8:30_1">-</td>
            <td class="td-css" id="8:30_2">-</td>
            <td class="td-css" id="8:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">9:00</td>
            <td class="td-css" id="9:00_1">-</td>
            <td class="td-css" id="9:00_2">-</td>
            <td class="td-css" id="9:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">9:30</td>
            <td class="td-css" id="9:30_1">-</td>
            <td class="td-css" id="9:30_2">-</td>
            <td class="td-css" id="9:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">10:00</td>
            <td class="td-css" id="10:00_1">-</td>
            <td class="td-css" id="10:00_2">-</td>
            <td class="td-css" id="10:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">10:30</td>
            <td class="td-css" id="10:30_1">-</td>
            <td class="td-css" id="10:30_2">-</td>
            <td class="td-css" id="10:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">11:00</td>
            <td class="td-css" id="11:00_1">-</td>
            <td class="td-css" id="11:00_2">-</td>
            <td class="td-css" id="11:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">11:30</td>
            <td class="td-css" id="11:30_1">-</td>
            <td class="td-css" id="11:30_2">-</td>
            <td class="td-css" id="11:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">12:00</td>
            <td class="td-css" id="12:00_1">-</td>
            <td class="td-css" id="12:00_2">-</td>
            <td class="td-css" id="12:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">12:30</td>
            <td class="td-css" id="12:30_1">-</td>
            <td class="td-css" id="12:30_2">-</td>
            <td class="td-css" id="12:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">13:00</td>
            <td class="td-css" id="13:00_1">-</td>
            <td class="td-css" id="13:00_2">-</td>
            <td class="td-css" id="13:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">13:30</td>
            <td class="td-css" id="13:30_1">-</td>
            <td class="td-css" id="13:30_2">-</td>
            <td class="td-css" id="13:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">14:00</td>
            <td class="td-css" id="14:00_1">-</td>
            <td class="td-css" id="14:00_2">-</td>
            <td class="td-css" id="14:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">14:30</td>
            <td class="td-css" id="14:30_1">-</td>
            <td class="td-css" id="14:30_2">-</td>
            <td class="td-css" id="14:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">15:00</td>
            <td class="td-css" id="15:00_1">-</td>
            <td class="td-css" id="15:00_2">-</td>
            <td class="td-css" id="15:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">15:30</td>
            <td class="td-css" id="15:30_1">-</td>
            <td class="td-css" id="15:30_2">-</td>
            <td class="td-css" id="15:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">16:00</td>
            <td class="td-css" id="16:00_1">-</td>
            <td class="td-css" id="16:00_2">-</td>
            <td class="td-css" id="16:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">16:30</td>
            <td class="td-css" id="16:30_1">-</td>
            <td class="td-css" id="16:30_2">-</td>
            <td class="td-css" id="16:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">17:00</td>
            <td class="td-css" id="17:00_1">-</td>
            <td class="td-css" id="17:00_2">-</td>
            <td class="td-css" id="17:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">17:30</td>
            <td class="td-css" id="17:30_1">-</td>
            <td class="td-css" id="17:30_2">-</td>
            <td class="td-css" id="17:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">18:00</td>
            <td class="td-css" id="18:00_1">-</td>
            <td class="td-css" id="18:00_2">-</td>
            <td class="td-css" id="18:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">18:30</td>
            <td class="td-css" id="18:30_1">-</td>
            <td class="td-css" id="18:30_2">-</td>
            <td class="td-css" id="18:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">19:00</td>
            <td class="td-css" id="19:00_1">-</td>
            <td class="td-css" id="19:00_2">-</td>
            <td class="td-css" id="19:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">19:30</td>
            <td class="td-css" id="19:30_1">-</td>
            <td class="td-css" id="19:30_2">-</td>
            <td class="td-css" id="19:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">20:00</td>
            <td class="td-css" id="20:00_1">-</td>
            <td class="td-css" id="20:00_2">-</td>
            <td class="td-css" id="20:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">20:30</td>
            <td class="td-css" id="20:30_1">-</td>
            <td class="td-css" id="20:30_2">-</td>
            <td class="td-css" id="20:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">21:00</td>
            <td class="td-css" id="21:00_1">-</td>
            <td class="td-css" id="21:00_2">-</td>
            <td class="td-css" id="21:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">21:30</td>
            <td class="td-css" id="21:30_1">-</td>
            <td class="td-css" id="21:30_2">-</td>
            <td class="td-css" id="21:30_3">-</td>
        </tr>
        <tr>
            <td class="td-css">22:00</td>
            <td class="td-css" id="22:00_1">-</td>
            <td class="td-css" id="22:00_2">-</td>
            <td class="td-css" id="22:00_3">-</td>
        </tr>
        <tr>
            <td class="td-css">22:30</td>
            <td class="td-css" id="22:30_1">-</td>
            <td class="td-css" id="22:30_2">-</td>
            <td class="td-css" id="22:30_3">-</td>
        </tr>
    </table>
    </div>


</body>

</html>