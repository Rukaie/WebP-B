<link rel="stylesheet" type="text/css" href="loginform_style.css">

<?php
session_start();
if (isset($_GET["userName"]) && isset($_GET["password"])) {
$username = $_GET["userName"];
$passwd = $_GET["password"];
}

$pdo = new PDO("sqlite:webp.sqlite");
$st = $pdo->prepare("SELECT * FROM user WHERE username=?");
$st->execute(array($username));
$user_on_db = $st->fetch();

if (!$user_on_db) {
$result = "指定されたユーザが存在しません";
}
else if($passwd == $user_on_db["passward"]){
$_SESSION["user"] = $username;
$_SESSION["gender"] = $user_on_db["gender"];

$result = "ようこそ" . $username . "さん。ログインに成功しました。";
}
else {
$result = "パスワードが違います。";
}
echo $result;
?>
<br>
<a href="index.html">トップページに戻る</a><br>
<a href="select_page.php">今日のコーディネートを見る</a>
