<?php
session_start();
$_SESSION = array();
session_destroy(); ?>
<link rel="stylesheet" type="text/css" href="signup_style.css">
<?php
echo "ログアウトしました。";
?>
<br><a href="index_wp.php">トップページに戻る</a>
