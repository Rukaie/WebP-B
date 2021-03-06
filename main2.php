<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <title>Dress Forcast</title>
</head>

<!-- ホバーしたら参照したサイトに飛ぶようにしたい -->
<body>
    <h1 style="text-align: center;">Today's selection for you!</h1>
    <p style="text-align: center;">○○さんへの今日のおすすめはこちらです！</p>
    <div class="fadein">
      <?php
      if($temp == 0 && $gender == 0){?>
          <img src="images/hamamen5under.jpg">
          <img src="images/koi-5.jpg">
          <img src="images/taka0-5.jpg"> <?php
      }else if($temp == 0 && $gender == 1){ ?>
          <img src="images/ChihiroUnder5.png">
          <img src="images/hama0under.jpg">
          <img src="images/yukinoUnder5.jpg"> <?php
      }else if($temp == 5 && $gender == 0){ ?>
            <img src="images/hamamen5-10.jpg">
            <img src="images/koi5-10.jpg">
            <img src="images/taka5-10.jpg"> <?php
      }else if($temp == 5 && $gender == 1){ ?>
            <img src="images/Chihiro5to10.jpg">
            <img src="images/hama5-10.jpg">
            <img src="images/yukino5-10.jpg"> <?php
      }else if($temp == 10 && $gender == 0){ ?>
            <img src="images/ChihiroMen10-15.jpg">
            <img src="images/koi10-15.jpg">
            <img src="images/taka10-15.jpg"> <?php
      }else if($temp == 10 && $gender == 1){ ?>
            <img src="images/Chihiro10to15.jpg">
            <img src="images/hama10-15.jpg">
            <img src="images/yukino10-15.jpg"> <?php
      }else if($temp == 15 && $gender == 0){ ?>
            <img src="images/ChihiroMen15-20.jpg">
            <img src="images/koi15-20.jpg">
            <img src="images/taka15-20.jpg"> <?php
      }else if($temp == 15 && $gender == 1){ ?>
            <img src="images/Chihiro15to20.jpg">
            <img src="images/hama15-20.jpg">
            <img src="images/yukino15-20.jpg"> <?php
      }else if($temp == 20 && $gender == 0){ ?>
            <img src="images/yukinoMen20-25.jpg">
            <img src="images/koi20-25.jpg">
            <img src="images/taka20-25.jpg"> <?php
      }else if($temp == 20 && $gender == 1){ ?>
            <img src="images/Chihiro20-25.jpg">
            <img src="images/hama20-25.jpg">
            <img src="images/yukino20-25.jpg"> <?php
      }else if($temp == 25 && $gender == 0){ ?>
            <img src="images/yukinoMen25-30.jpg">
            <img src="images/koi25-30.jpg">
            <img src="images/taka25-30.png"> <?php
      }else if($temp == 25 && $gender == 1){ ?>
            <img src="images/Chihiro25-30.jpg">
            <img src="images/hama25-30.jpg">
            <img src="images/yukino25-30.jpg"> <?php
      }else if($temp == 30 && $gender == 0){ ?>
            <img src="images/koi30-.jpg">
            <img src="images/taka30-.jpg"> <?php
      }else if($temp == 30 && $gender == 1){ ?>
            <img src="images/ChihiroOver30.jpg">
            <img src="images/hama30over.jpg">
            <img src="images/yukinoOver30.jpg"> <?php
      }?>
    </div>

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
