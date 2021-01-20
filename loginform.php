<?php session_start();
if (isset($_SESSION["user"])) {
  header("Location: select_page.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>loginform</title>
    <link rel="stylesheet" type="text/css" href="loginform_style.css">
  </head>
  <body>
    <?php if($error_message){
      echo $error_message;
    }?>

    <content>
        <div class="title"><h1>login form</h1></div>
        <form action="submit.php" method="GET">

        <p>username<span>*</span><br>
        <input type="text" name="userName" class="question" required></p>

        <p>password<span>*</span><br>
        <input type="password" name="password" class="question" required></p>

        <input type="checkbox" name="agree" value="3" required>I agree to the Privacy Policy.<br>
        <input type="submit" value="Send" class="button" name="login">
        </form>
      <a href="index_wp.php">トップページに戻る</a>
    </content>

  </body>

</html>
