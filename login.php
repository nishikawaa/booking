<?php
/*変数定義*/
//アラート出力文字列
$alart = "ID,パスワードを入力してください、";
//foreach文周回カウント
$roop_count = 0;

//ページ更新ボタン
if (isset($_POST["pageupate"])) {
    header("Location: ./loginpage.php");
}


//DBデータ取得
try {
    $dbh = new PDO('mysql:dbname=user; host=localhost;port=3306; charset=utf8', 'root', 'atmark_pass');
    if (isset($_POST["loginNumber"])) {
        $sql = "SELECT * FROM user.login where emp_num =" . $_POST["loginNumber"];
        $res = $dbh->query($sql);
        // 取得したデータを出力
        foreach ($res as $value) {
            //ログイン確認
            if (isset($_POST["password"])) {
                if ($value["emp_pass"] == $_POST["password"]) {
                    header("Location: ./mainpage.php");
                } else {
                    $alart = "パスワードが間違っています。";
                }
            }
            $roop_count++;
        }
        if ($roop_count == 0) {
            $alart = "IDが間違っています。";
        }
    }

    // print '接続に成功しました。';
} catch (PDOException $e) {
    print "接続エラー:{$e->getMessage()}";
}
$sql = null;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="../css/login.css?v=2">

    <script src="../js/jquery-1.10.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="../js/1.x-snippet.js"></script> -->
    <script src="../js./login.js"></script>
    <script type="text/javascript"></script>

</head>

<body>
    <div id="page">
        <!-- 画面上部 -->
        <div class="upbox">
            <h2>ログイン画面</h2>
        </div>

        <!-- 画面下部 -->
        <div class="downbox" align="center">
            <form action="login.php" method="POST" id="downitem">
                <p id="login"><label>
                        <input type="text" id="inputlogin" name="loginNumber" size="30" placeholder="ログインIDを入力して下さい" style="width: 380px; height: 50px; outline:0px none black"></label>
                </p>
                <p id="password"><label>
                        <input type="password" id="inputpass" name="password" size="30" placeholder="*****" style="width: 380px; height: 50px; outline:0px none black"></label>
                </p>
                <p id="alarm">
                    <?php
                    if ($alart != "") {
                        print($alart);
                    }
                    ?>
                </p>

                <p id="submitbtn"><label>
                        <input type="submit" id="inputsubmit" name="submitbtn" size="30" value="ログイン" style="width: 380px; height: 50px; outline:0px none black"></label>
                </p>

            </form>
        </div>

    </div>
</body>

</html>