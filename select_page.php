<?php session_start();
if (isset($_SESSION["user"])){
}else{
  header("Location: loginform.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Select Page</title>
    <link rel="stylesheet" type="text/css" href="signup_style.css">
</head>

<body>
  <h1>Select Page</h1>
    <form action="main.php" method="get">
    Temparature<br>
    <select name="temp">
    <option value="0">BELOW 5℃</option>
    <option value="5">5℃~10℃</option>
    <option value="10">10℃~15℃</option>
    <option value="15">15℃~20℃</option>
    <option value="20">20℃~25℃</option>
    <option value="25">25℃~30℃</option>
    <option value="30">OVER 30℃</option>
    </select> <br>
    Weather<br>
    <select name="weather">
    <option value="sunny">☀︎SUNNY</option>
    <option value="cloudy">☁︎CLOUDY</option>
    <option value="rainy">☔︎RAINY</option>
    </select><br><br>
    <input type="submit" value="SEND"><br>
    </form>
    <a href="index_wp.php">トップページに戻る</a>
</body>
