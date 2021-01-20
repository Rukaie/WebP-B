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
    <title>sign up</title>
    <link rel="stylesheet" type="text/css" href="signup_style.css">
  </head>
  <body>

  <div class="title"><h1>sign up</h1></div>
  <div class="signup">
    <form action="signup_suc.php" method="get">
      <p>username<span>*</span><br>
      <input type="text" name="username" class="question" required></p>

      <p>password<span>*</span><br>
      <input type="text" name="password" class="question" required></p>

      <p>gender<span>*</span><br>
      <input type="radio" name="gender" value="woman"> woman<br>
      <input type="radio" name="gender" value="man"> man<br>
      <input type="radio" name="gender" value="other"> other<br></p>

      <p>sensible temperature<span>*</span><br>
      <input type="radio" name="feel" value="atsugari">sensitive to heat<br>
      <input type="radio" name="feel" value="hutu">normal<br>
      <input type="radio" name="feel" value="samugari">sensitive to cold<br></p>

      <input type="checkbox" name="agree"> I agree to the Privacy Policy
      <input type="submit" value="Send" class="button">
    </form>
    <a href="index_wp.php">トップページに戻る</a>
  </body>

</html>
