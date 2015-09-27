<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: login.php");
}
?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>サンプルアプリケーション</title>
  </head>
  <body>
  <h1>値の挿入</h1>
  <form action="input_execute.php" method="post">
    ID: <input type="text" name="news_id" value="" />
    タイトル: <input type="text" name="news_title" value="" />
    ニュースの詳細: <input type="text" name="news_detail" value="" />
    フラグ: <input type="text" name="show_flg" value="" />
    著者: <input type="text" name="author" value="" />
    <input type="submit" />
  </form>

  </body>
</html>