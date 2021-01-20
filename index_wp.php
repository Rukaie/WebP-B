<?php session_start(); ?>
<html>
<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="index_wp_stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="common.js"></script>
    <script src="https://kit.fontawesome.com/ce42b5ad45.js" crossorigin="anonymous"></script>
    <script>
        (function (d) {
            var config = {
                kitId: 'qds1ubs',
                scriptTimeout: 3000,
                async: true
            },
                h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>
<body>


    <div class="top">
        <header>
            <div class="slide">
                <img
                    src="https://images.unsplash.com/photo-1469329989238-48310798c014?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXw2MzQ2fDB8MXxzZWFyY2h8ODd8fGNsb3RoZXN8ZW58MHx8fA&ixlib=rb-1.2.1&q=80&w=1080">
                <img src="https://cdn.pixabay.com/photo/2015/10/12/15/18/clothing-store-984396_1280.jpg">
                <img src="https://cdn.pixabay.com/photo/2015/11/07/11/46/fashion-1031469_1280.jpg">
                <img src="https://cdn.pixabay.com/photo/2016/11/18/13/48/clothes-1834650_1280.jpg">
                <img src="https://cdn.pixabay.com/photo/2019/02/10/15/09/clothes-3987460_1280.jpg">
            </div>
  <script>header("./")</script>
  <div class="top_body">
    <h2>Dress Forcast</h2>
    <p>clothes that match today's temperature</p>
</div>
<?php
if (isset($_SESSION["user"])) { ?>
  <div class="buttons">
      <a href="logout.php" class="btn login_button">log out</a>
  </div><?php
}else{?>
<div class="buttons">
    <a href="loginform.php" class="btn login_button">log in</a>
    <a href="signup.php" class="btn signin_button">sign in</a>
</div> <?php
} ?>
</div>
</body>

</html>
