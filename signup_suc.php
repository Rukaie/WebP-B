<?php
  $pdo = new PDO("sqlite:webp.sqlite");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $st = $pdo->prepare("INSERT INTO user(id, username, passward, gender) VALUES(?, ?, ?, ?)");

  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }

if(isset($_GET['username']) && isset($_GET['password']) && isset($_GET['gender'])){
   $name = ($_GET['username']);
   $pw = ($_GET['password']);
   $gender = ($_GET['gender']);
   $st->execute(array($id,$name,$pw,$gender));
   $result="登録しました。";
  }
  else{
    $result="登録することができませんでした。";
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>アカウント登録</title>
    <link rel="stylesheet" href="myblog_style.css">
  </head>
  <body style="background-color:rgb(230,226,223);">
    <?php echo $result."画面が変わるまでお待ちください。"; ?><br>
    <meta http-equiv="Refresh" content="3;URL=index_wp.php">
  </body>
</html>
