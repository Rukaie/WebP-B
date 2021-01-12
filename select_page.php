<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Select Page</title>
    <link rel="stylesheet" href="select_page.css">
</head>
<body>
  <h1>Select Page</h1>
    <form action="select_page.php" method="get">
    Temparature<br>
    <select>
    <option value="-5">BELOW 5℃</option>
    <option value="5-10">5℃~10℃</option>
    <option value="10-15">10℃~15℃</option>
    <option value="15-20">15℃~20℃</option>
    <option value="20-25">20℃~25℃</option>
    <option value="25-30">25℃~30℃</option>
    <option value="30-">OVER 30℃</option>
    </select> <br>Weather<br>
    <select>
    <option value="sunny">☀︎SUNNY</option>
    <option value="cloudy">☁︎CLOUDY</option>
    <option value="rainy">☔︎RAINY</option>
    </select><br><br>
    <input type="submit" value="SEND"><br>
    </form>
</body>