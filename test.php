<?php
    session_start();
    function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
    $pdo = new PDO("sqlite:webp.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $st = $pdo->query("select * from user");
    $data = $st->fetchAll();


    //気温と天気ここから
    if (isset($_GET["temp"]) && isset($_GET["weather"])) {
        $temp = $_GET["temp"];
        $weather = $_GET["weather"];
    }
    print($temp); //で中身表示
    //ここまで
    

    //ユーザー情報
    //if文は中身が入ってるかどうか
    //→$_SESSION[""]で中身を見る
    if (isset($_SESSION["username"])) {
        print 'テストテスト'.$_SESSION["username"].'テスト';
    }
    if (isset($_SESSION["gender"])) {
        print 'テストテスト'.$_SESSION["gender"].'テスト';
    }
    //ここまで
?>

