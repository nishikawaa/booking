<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="../css/mainpage.css?<?= uniqid() ?>">

    <!-- 以下ダイアログ追加用-->
    <!-- スタイルシートの読み込み -->
    <link href="../css/modal.css?<?= uniqid() ?>" rel="stylesheet">
</head>

<body>
    <!-- ページヘッダー -->
    <div id="pageheader">
        <p style="margin: 0;">-</p>
        <div id="logout">
            <a href="./login.php" class="logout">ログアウト</a>
        </div>
    </div>

    <!-- ページ左部 -->
    <div id="page-left">
        <p id="head-icon">よやくん</p>
    </div>

    <!-- ページ右部 -->
    <div id="page-right">
        <!-- <a href="#" class="btn-square-soft">＋新規予約</a> -->
        <p id="sub-left"><a href="#" id="modal-open" class="button-link">＋新規予約</a></p>
        <div class="date" id="sub-right">

            <iframe id="frameday" src="day.php" width="280" height="70">

            </iframe>
        </div>

        <iframe id="frametarget" src="timeschedule.php" width="1100" height="760">

        </iframe>

        <!-- タイムスケジュール -->
        <!-- <table class="table-css">
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
        </table> -->
    </div>

    <!-- ここからモーダルウィンドウ -->
    <div id="modal-content">
        <!-- モーダルウィンドウのコンテンツ開始 -->
        <!-- <p>モーダルウィンドウのコンテンツをHTMLで自由に編集することができます。画像や、動画埋め込みなど、お好きなものを入れて下さい。</p>
        <p>「閉じる」か「背景」をクリックするとモーダルウィンドウを終了します。</p> -->
        <h2>新規予約</h2>
        <form action="mainpage.php" method="GET">
            <p>タイトル：<input type="text" name="title" id="title"></p>
            <P>使用場所：
                <label><input type="radio" name="place" value="1">大阪ー応接室</label>
                <label><input type="radio" name="place" value="2">東京ー応接室</label>
                <label><input type="radio" name="place" value="3">朝礼ZOOM</label>
            </P>
            <p>使用時間：<select name="startH" id="startH" size="1">
                    <option value="">ー</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="12">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                </select>
                ：
                <select name="startM" id="startM" size="1">
                    <option value="">ー</option>
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select>
                ～
                <select name="finishH" id="finishH" size="1">
                    <option value="">ー</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="12">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                </select>
                ：
                <select name="finishM" id="finishM" size="1">
                    <option value="">ー</option>
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select>
            </p>
            <p>使用代表者名：<input type="text" name="mainuser" id="mainuser"></p>
            <input type="submit" id="modal-close" class="button-link" name="submitbtn" size="30" value="登録" style="width: 380px; height: 50px; outline:0px none black"></label>
            <!-- モーダルウィンドウのコンテンツ終了 -->
        </form>


    </div>

    <!-- <p><a id="modal-open" class="button-link">クリックするとモーダルウィンドウを開きます。</a></p> -->
    <!-- ここまでモーダルウィンドウ -->

    <!-- JavaScriptの読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/modal.js"></script>

    <!-- <script src="../js/mainpage.js"></script> -->
</body>

<?php
if (isset($_GET["title"]) && isset($_GET["place"]) && isset($_GET["startH"]) && isset($_GET["startM"]) && isset($_GET["finishH"]) && isset($_GET["finishM"]) && isset($_GET["mainuser"])) {
    $title = $_GET["title"];
    $place = $_GET["place"];
    $startH = $_GET["startH"];
    $startM = $_GET["startM"];
    $finishH = $_GET["finishH"];
    $finishM = $_GET["finishM"];
    $mainuser = $_GET["mainuser"];
    print($title . "<br>" . $place . "<br>" . $startH . "<br>" . $startM . "<br>" . $finishH . "<br>" . $finishM . "<br>" . $mainuser);
    try {
        $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');

        $sql = "INSERT INTO `user`.`booking` (`booking_no`, `year`, `month`, `day`, `start_hour`, `start_minute`, `finish_hour`, `finish_minute`, `place`, `title`, `name`, `delete_key`) VALUES (\"" . date("y") . date("m") . date("d") . $startH . $startM . $place . "\",\"" . date("y") . "\",\"" . date("m") . "\",\"" . date("d") . "\",\"" . $startH . "\",\"" . $startM . "\",\"" . $finishH . "\",\"" . $finishM . "\",\"" . $place . "\",\"" . $title . "\",\"" . $mainuser . "\", '0');";

        $res = $dbh->query($sql);
    } catch (PDOException $e) {
        print("接続エラーorSQLエラー");
    }

    $sql = null;
} else {
    print("入力されていない項目があります。");
}

?>


</html>