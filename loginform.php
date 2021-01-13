<?php
  session_start();

  $error_message="";

  if(isset($_POST["login"])){
    if($_POST["userName"]=="web" && $_POST["password"]=="web"){
      $_SESSION["userName"]=$_POST["userName"];
      $loginSuccessUrl="login_success.php";
      header("Location: {$loginSuccessUrl}");
      exit;
    }
    $error_message="ID,もしくはパスワードが間違っています。<br>もう一度入力してください。";

  }?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>loginform</title>
    <link rel="stylesheet" type="text/css" href="loginform_style.css">
  </head>
  <body>
    <header>
    </header>
    <?php if($error_message){
      echo $error_message;
    }?>
    
    <content>
        <div class="title"><h1>login form</h1></div>
        <form action="loginform.php" method="POST">

        <p>username<span>*</span><br>
        <input type="text" name="userName" class="question" required></p>

        <p>password<span>*</span><br>
        <input type="password" name="password" class="question" required></p>

        <input type="checkbox" name="agree" value="3" required>I agree to the Privacy Policy.<br>
        <input type="submit" value="Send" class="button" name="login">

    </content>
    <footer>
    </footer>
    
  </body>

</html>
  