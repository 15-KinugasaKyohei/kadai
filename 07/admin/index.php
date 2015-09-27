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
  <h1>ログイン機能　サンプルアプリケーション</h1>
  <!-- ユーザIDにHTMLタグが含まれても良いようにエスケープする -->
  <p>ようこそ<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>さん</p>
  <body>
  <ul>
    <li><a href="input.php">ニュース新規追加</a></li>
    <li><a href="news_list.php">ニュース一覧（更新はここから）</a></li>
    <li><a href="#">ニュース検索</a></li>
  </ul>
  <ul>
  <li><a href="logout.php">ログアウト</a></li>
  </ul>
  </body>
</html>