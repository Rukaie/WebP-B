<?php
    session_start();
    function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
    $pdo = new PDO("sqlite:webp.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $st = $pdo->query("select * from user");
    $data = $st->fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <title>Dress Forcast</title>
</head>

<!-- ホバーしたら参照したサイトに飛ぶようにしたい -->
<body>
<?php

//気温と天気ここから
if (isset($_GET["temp"])) {
    $temp = $_GET["temp"];
}
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"];
}
if (isset($_SESSION["gender"])) {
    $gender = $_SESSION["gender"];
}
//ここまで
?>
  <p class="titleformain">Dress Forcast</p>
  <p>Today's selection for you!</p>
  <p><?php
  if($gender === "man"){
    echo "男性";
  }else if($gender === "woman"){
    echo "女性";
  }?>　気温：
  <?php echo $temp; ?>〜<?php echo $temp+5; ?>℃ <br><?php echo $username; ?>さんへの今日のおすすめはこちらです！</p>
  <div class="fadein"> <?php

  if($temp == 0 && $gender === "man"){?>
      <img src="images/hamamen5under.jpg">
      <img src="images/koi-5.jpg">
      <img src="images/taka0-5.jpg"> <?php
  }else if($temp == 0 && $gender === "woman"){ ?>
      <img src="images/ChihiroUnder5.png">
      <img src="images/hama0under.jpg">
      <img src="images/yukinoUnder5.jpg"> <?php
  }else if($temp == 5 && $gender === "man"){ ?>
        <img src="images/hamamen5-10.jpg">
        <img src="images/koi5-10.jpg">
        <img src="images/taka5-10.jpg"> <?php
  }else if($temp == 5 && $gender === "woman"){ ?>
        <img src="images/Chihiro5to10.jpg">
        <img src="images/hama5-10.jpg">
        <img src="images/yukino5-10.jpg"> <?php
  }else if($temp == 10 && $gender === "man"){ ?>
        <img src="images/ChihiroMen10-15.jpg">
        <img src="images/koi10-15.jpg">
        <img src="images/taka10-15.jpg"> <?php
  }else if($temp == 10 && $gender === "woman"){ ?>
        <img src="images/Chihiro10to15.jpg">
        <img src="images/hama10-15.jpg">
        <img src="images/yukino10-15.jpg"> <?php
  }else if($temp == 15 && $gender === "man"){ ?>
        <img src="images/ChihiroMen15-20.jpg">
        <img src="images/koi15-20.jpg">
        <img src="images/taka15-20.jpg"> <?php
  }else if($temp == 15 && $gender === "woman"){ ?>
        <img src="images/Chihiro15to20.jpg">
        <img src="images/hama15-20.jpg">
        <img src="images/yukino15-20.jpg"> <?php
  }else if($temp == 20 && $gender === "man"){ ?>
        <img src="images/yukinoMen20-25.jpg">
        <img src="images/koi20-25.jpg">
        <img src="images/taka20-25.jpg"> <?php
  }else if($temp == 20 && $gender === "woman"){ ?>
        <img src="images/Chihiro20-25.jpg">
        <img src="images/hama20-25.jpg">
        <img src="images/yukino20-25.jpg"> <?php
  }else if($temp == 25 && $gender === "man"){ ?>
        <img src="images/yukinoMen25-30.jpg">
        <img src="images/koi25-30.jpg">
        <img src="images/taka25-30.png"> <?php
  }else if($temp == 25 && $gender === "woman"){ ?>
        <img src="images/Chihiro25-30.jpg">
        <img src="images/hama25-30.jpg">
        <img src="images/yukino25-30.jpg"> <?php
  }else if($temp == 30 && $gender === "man"){ ?>
        <img src="images/koi30-.jpg">
        <img src="images/taka30-.jpg">
        <img src="images/taka30-v2.jpg"><?php
  }else if($temp == 30 && $gender === "woman"){ ?>
        <img src="images/ChihiroOver30.jpg">
        <img src="images/hama30over.jpg">
        <img src="images/yukinoOver30.jpg"> <?php
  }?>
<br>
<a href="select_page.php">～もう一度天気を選ぶ～</a><br>
<a href="index_wp.php">～トップに戻る～</a>
</body>
<script>
    $(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});
</script>
</html>
