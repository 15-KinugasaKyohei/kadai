<?php
error_reporting(E_ALL & ~E_NOTICE);
// セッション開始
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  echo var_dump($_SESSION["USERID"]);
  //header("Location: login.php");
}

?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>サンプルアプリケーション</title>
  </head>
  <body>
  <h1>ログイン機能　サンプルアプリケーション</h1>

  <?php
  $dbh = new PDO('mysql:host=localhost;dbname=cs_academy;charset=utf8',root,'');
  foreach($dbh->query('SELECT * from CS_ACADEMY where SHOW_FLG =1 ') as $row) {
    echo '<dt class="news-date">'.mb_substr($row[5],0,10).'</dt>';
    echo '<dd class="news-description"><a href="http://localhost/kadai/6/news'.$row[0].'.php">'.$row[1]. '</a></dd>';
  }
  ?>

  <span><a href="update.php">ニュース一覧（更新はここから）</a></span>
  </body>
</html>